<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Event;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use File;

class EventController extends Controller
{
    public function getIndex(){
        return view('event.index');
    }

    public function getList(){
        $events = Event::with(['attachments'])->get();
        $datatable = Datatables::of($events);
        return $datatable->make(true);
    }

    public function getEvent(Request $request ,$param){
        $event = '';
        $query = $request->query();
        if(($param == 'edit') && $query['id']){
            $event = Event::with(['attachments'])->find($query['id']);
        }
        return view('event.editCreate', compact(['event']));
    }

    public function postEvent(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'desc' => 'required'
        ]);
        $input = $request->except(['_token']);

        if(isset($input['event_id'])){
            $event = Event::with('attachments')->find($input['event_id']);
            if ($input['ids']) {
                $array_remove = explode(',', $input['ids']);
                $files = Attachment::whereIn('id', $array_remove);
                $array_files = $files->get();
                foreach ($array_files as $file){
                    File::delete($file->location);
                }
                $files->delete();
            }
            $event->update($input);
        }else{
            $event = Event::create($input);
        }


        $path = 'uploads/files';
        if (!File::exists($path)){
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        if(isset($input['file'])){
            foreach ($request['file'] as $file){
                $filename = str_replace(' ', '_', $file->getClientOriginalName());
                $file->move($path, $filename);
                $event->attachments()->create([
                    'name' => $filename,
                    'location' => $path.'/'.$filename
                ]);
            }
        }
        return redirect('/events')->with('status', 'Success / Berhasil');
    }

    public function deleteEvent(Request $request){
        $event = Event::with(['attachments'])->find($request['id']);
        if($event->attachments){
            foreach ($event->attachments as $attachment){
                File::delete($attachment->location);
            }
        }
        $event->delete();

        return redirect()->back()->with('status', 'Berhasil menghapus event');
    }
}

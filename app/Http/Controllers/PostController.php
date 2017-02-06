<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Post;
use Illuminate\Http\Request;
use File;
use Yajra\Datatables\Facades\Datatables;

class PostController extends Controller
{
    public function getIndex(){
        return view('post.index');
    }

    public function getList(){
        $posts = Post::with(['attachments'])->get();
        $datatable = Datatables::of($posts);
        return $datatable->make(true);
    }

    public function getUpload(Request $request ,$param){
        $post = '';
        $query = $request->query();
        if(($param == 'edit') && $query['id']){
            $post = Post::with(['attachments'])->find($query['id']);
        }
        return view('post.editCreate', compact(['post']));
    }

    public function postUpload(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'desc' => 'required'
        ]);
        $input = $request->except(['_token']);

        if(isset($input['post_id'])){
            $post = Post::with('attachments')->find($input['post_id']);
            if ($input['ids']) {
                $array_remove = explode(',', $input['ids']);
                $files = Attachment::whereIn('id', $array_remove);
                $array_files = $files->get();
                foreach ($array_files as $file){
                    File::delete($file->location);
                }
                $files->delete();
            }
            $post->update($input);
        }else{
            $post = Post::create($input);
        }


        $path = 'uploads/files';
        if (!File::exists($path)){
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        if(isset($input['file'])){
            foreach ($request['file'] as $file){
                $filename = str_replace(' ', '_', $file->getClientOriginalName());
                $file->move($path, $filename);
                $post->attachments()->create([
                    'name' => $filename,
                    'location' => $path.'/'.$filename
                ]);
            }
        }
        return redirect('/upload-index')->with('status', 'Success / Berhasil');
    }

    public function deletePost(Request $request){
        $post = Post::with(['attachments'])->find($request['id']);
        if($post->attachments){
            foreach ($post->attachments as $attachment){
                File::delete($attachment->location);
            }
        }
        $post->delete();

        return redirect('/upload-index')->with('status', 'Berhasil menghapus post');
    }
}

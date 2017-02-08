<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function getIndex()
    {
        $teams = Team::get();
        return view('team.index', compact('teams'));
    }

    public function getCreateEdit(Request $request, $param)
    {
        $team = '';
        $id = $request->query('id');
        if ($param == 'edit' && $id) {
            $team = Team::find($id);
        }

        return view('team.createEdit', compact('team'));
    }

    public function postTeam(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'job_position' => 'required|max:255'
        ]);
        $input = $request->except(['_token']);
        $path = 'uploads/photos';
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        if (isset($input['file_images'])) {
            //save file upload
            $file = $input['file_images'];
            $filename = str_random(5) . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);
            $photo = $path . '/' . $filename;
            $input['photo'] = $photo;

            //crop image saved
            $img_crop = $input['picture'];
            $img_crop = substr($img_crop, strpos($img_crop, ",") + 1);
            $data = base64_decode($img_crop);
            file_put_contents($photo, $data);
            unset($input['file_images']);
            unset($input['picture']);
        }

        if (isset($input['id'])) {
            $team = Team::find($input['id']);
            if(isset($input['photo'])){
                File::delete($team->photo);
            }
            $team->update($input);
        } else {
            Team::create($input);
        }

        return redirect('/teams')->with('status', 'Berhasil menambahkan / mengubah Team');
    }
}

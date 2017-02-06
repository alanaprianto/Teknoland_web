<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use File;

class PostController extends Controller
{
    public function getUpload(){
        return view('post.editCreate');
    }

    public function postUpload(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'desc' => 'required'
        ]);
        $input = $request->except(['_token']);

        $post = Post::create($input);

        $path = 'uploads/files';
        if (!File::exists($path)){
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        foreach ($request['file'] as $file){
            $filename = str_replace(' ', '_', $file->getClientOriginalName());
            $file->move($path, $filename);
            $post->attachments()->create([
                'name' => $filename,
                'location' => $path.'/'.$filename
            ]);
        }

        return redirect('/home')->with('status', 'Success / Berhasil');
    }
}

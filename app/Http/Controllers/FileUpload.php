<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\File;

class FileUpload extends Controller
{
    
    public function createForm()
    {
        return view('file-upload');
    }
    public function fileUpload(Request $req){
        $user_id = Auth::user()->id;
        $req->validate([
        'file' => 'required|mimes:jpg,png,gif,mp3|max:2048',
        'filetype' => 'required|string'
        ]);
        $fileModel = new File;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->move('upload', $fileName);
            $fileModel->user_id = $user_id;
            if($req->filetype == "wallpapper"){
                $fileModel->type = true;
            }else{
                $fileModel->type = false;
            }
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = $filePath;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
    }
}

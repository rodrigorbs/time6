<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Auth;
use Image;
use Hash;

class ImageUploadController extends Controller
{
    public function perfil(){
        return view('pages.perfil.index', array('user' => Auth::user()) );
    }

    /*Upload the image in past Storage*/
    public function updateAvatar(Request $request){

        if($request->hasFile('avatar')){
            $user       = Auth::user();
            $oldAvatar  = $user->avatar;
            $file       = $request->file('avatar');
            $filename   = time() . '.' . $file->getClientOriginalExtension();
            $image      = Image::make($file);

            if ($oldAvatar != 'default.jpg') {
                Storage::delete($oldAvatar);
            }

            $image->fit(250, 250, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::put($filename, (string) $image->encode());

            $user->avatar = $filename;
            $user->save();
        }

        return redirect('/perfil');
    }

    public function getUserImage()
    {
        $user       = Auth::user();
        $oldAvatar  = $user->avatar;
        $file       = Storage::disk('local')->get($oldAvatar);
        return Response::make($file,200,[ 'Content-Type' => $oldAvatar]);
    }

}

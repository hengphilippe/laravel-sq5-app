<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Profile extends Controller
{
    public function __invoke(){
        return view('auth.profile');
    }

    // public function ProfileStore(Request $request){
    //     $data = User::find(Auth::user()->id);
    //     $data ->name = $request->name;
    //     $data ->email = $request->email;
    //     $data ->mobile = $request->mobile;
    //     $data ->address = $request->address;
    //     $data ->gender = $request->gender;
    //     if($request->file('image')){
    //         $file = $request->file('image');
    //         @unlink(public_path('upload/user_images/'.$data->image));
    //         $filename = date('YmdHi').$file->getClientOriginalName();
    //         $file->move(public_path('upload/user_images'),$filename);
    //         $data['image'] = $filename;
    //     }
    //     $data->save();
    //     $notification = array(
    //         'message' => 'User Profile Updated Successfully',
    //         'alert-type' => 'success'
    //     );
    //     return redirect()->route('profile.view')->with($notification);
    // }
}
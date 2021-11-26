<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserProfileController extends Controller
{
    public function edit($id) {
        $data['users'] = User::findOrFail($id);
        return view('auth.profile-edit',$data);
    }

    public function update(Request $request, $id) {
       User::find($id)->update([
           'name' => $request->name,
           'phone' => $request->phone,
           'email' => $request->email
       ]);
       return redirect()->route('dashboard');
    }
}
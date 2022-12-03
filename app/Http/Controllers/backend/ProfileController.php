<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\User;

class ProfileController extends Controller
{
    public function view()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.user.view_profile',compact('user'));
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('backend.user.edit_profile',compact('editData'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/user/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user/'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('profile.view')->with('success','Data Updated Successfully');
    }

}


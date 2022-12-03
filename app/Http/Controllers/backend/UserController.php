<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;

class UserController extends Controller
{
    public function view(){
        $data['allData'] = User::all();
        return view('backend.user.user_list', $data);
        //$allData = User::all();
        //return view('backend.user.user_list', compact('allData','', ...));
    }

    public function add(){
        return view('backend.user.add_user');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users,email'
        ]);
        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        //return redirect()->route('user.list');
        return "ok";
    }

    public function edit($id){
        $editData = User::find($id);
        return view('backend.user.edit_user',compact('editData'));
    }

    public function update(Request $request,$id){
        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('user.list')->with('success', 'Data Updated Sucessfully');
    }

    public function delete($id){
        $user = User::find($id);
        //unlink image
        if(file_exists('public/upload/user/' . $user->image) AND ! empty($user->image)){
            unlink('public/upload/user/' . $user->image);
        }
        $user->delete();
        return redirect()->route('user.list')->with('success', 'Data Deleted Sucessfully');
    }

}
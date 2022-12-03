<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $data['allData'] = Post::with('categories')->get();
        return view('backend.post.post',$data);
    }

    public function add()
    {
        $data['allCat'] = Category::all();
        return view('backend.post.add_post',$data);
    }

    public function store(Request $request)
    {
        $data = new Post();
        $data->post_id = IdGenerator::generate(['table' => 'posts', 'field' => 'post_id', 'length' => 6, 'prefix' =>'POS']);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category_id = $request->category_id;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/post/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/post/'), $filename);
            $data['image'] = $filename;
        }
        $data->save();

        return redirect()->route('post.list')->with('success', 'Post Added Sucessfully');
    }

    public function edit($id)
    {
        $editData = Post::find($id);
        $allCat = Category::all();
        return view('backend.post.edit_post',compact('editData','allCat'));
    }

    public function update(Request $request,$id)
    {
        $data = Post::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category_id = $request->category_id;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/post/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/post/'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('post.list')->with('success', 'Post Updated Sucessfully');
    }

    public function delete($id){
        $data = Post::find($id);
        //unlink image
        if(file_exists('public/upload/post/' . $data->image) AND ! empty($data->image)){
            unlink('public/upload/post/' . $data->image);
        }
        $data->delete();
        return redirect()->route('post.list')->with('success', 'Post Deleted Sucessfully');
    }


}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('backend.category.category');
    }

    public function fetch(Request $request)
    {
        if($request->ajax()){
            $data = Category::latest()->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '<a href="'.route('category.edit', $row->id).'" class="btn btn-success btn-xs mb-2"><i class="fas fa-edit"></i>&nbsp;Edit</a>
                      <a href="'.route('category.delete', $row->id).'" class="btn btn-danger btn-xs mb-2" id="delete"><i class="fas fa-trash"></i>&nbsp;Delete</a>';
                      return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function add(){
        return view('backend.category.add_category');
    }

    public function store(Request $request){
        $data = new Category;
        $data->category_id = IdGenerator::generate(['table' => 'categories', 'field' => 'category_id', 'length' => 6, 'prefix' =>'CAT']);
        $data->category_name = $request->category_name;
        $data->save();
        return redirect()->route('category.list')->with('success', 'Category Added Sucessfully');
    }

    public function edit($id){
        $editData = Category::find($id);
        return view('backend.category.edit_category',compact('editData'));
    }

    public function update(Request $request,$id){
        $data = Category::find($id);
        $data->category_name = $request->name;
        $data->save();
        return redirect()->route('category.list')->with('success', 'Category Updated Sucessfully');
    }

    public function delete($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('category.list')->with('success', 'Category Delete Sucessfully');
    }

}

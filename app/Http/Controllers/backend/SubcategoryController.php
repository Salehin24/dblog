<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class SubcategoryController extends Controller
{
    public function index(){
        $data['allData'] = Subcategory::all();
        return view('backend.subcategory.subcategory',$data);
    }

    public function add(){
        $allCat = Category::all();
        return view('backend.subcategory.add_subcategory',compact('allCat'));
    }

    public function store(Request $request){
        $data = new Subcategory;
        $data->subcategory_id = IdGenerator::generate(['table' => 'subcategories', 'field' => 'subcategory_id', 'length' => 6, 'prefix' =>'SUB']);
        $data->subcategory_name = $request->subcategory_name;
        $data->category_id = $request->category_id;
        $data->save();
        return redirect()->route('subcategory.list')->with('success', 'Subcategory Added Sucessfully');
    }

    public function edit($id){
        $editData = Subcategory::find($id);
        $allCat = Category::all();
        return view('backend.subcategory.edit_subcategory',compact('editData','allCat'));
    }

    public function update(Request $request,$id){
        $data = Subcategory::find($id);
        $data->subcategory_name = $request->subcategory_name;
        $data->category_id = $request->category_id;
        $data->save();
        return redirect()->route('subcategory.list')->with('success', 'Subcategory Updated Sucessfully');
    }

    public function delete($id){
        $data = Subcategory::find($id);
        $data->delete();
        return redirect()->route('subcategory.list')->with('success', 'Subcategory Delete Sucessfully');
    }
}

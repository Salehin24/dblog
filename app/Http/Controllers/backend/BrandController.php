<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class BrandController extends Controller
{

    public function index(){
        $data['allData'] = Brand::all();
        return view('backend.brand.brand',$data);
    }

    public function add(){
        $allCat = Category::all();
        return view('backend.brand.add_brand',compact('allCat'));
    }

    public function store(Request $request){
        $data = new Subcategory;
        $data->subcategory_id = IdGenerator::generate(['table' => 'subcategories', 'field' => 'subcategory_id', 'length' => 6, 'prefix' =>'SUB']);
        $data->subcategory_name = $request->subcategory_name;
        $data->category_id = $request->category_id;
        $data->save();
        return redirect()->route('brand.list')->with('success', 'Subcategory Added Sucessfully');
    }

    public function edit($id){
        $editData = Subcategory::find($id);
        $allCat = Category::all();
        return view('backend.brand.edit_subcategory',compact('editData','allCat'));
    }

    public function update(Request $request,$id){
        $data = Subcategory::find($id);
        $data->subcategory_name = $request->subcategory_name;
        $data->category_id = $request->category_id;
        $data->save();
        return redirect()->route('brand.list')->with('success', 'Subcategory Updated Sucessfully');
    }

    public function delete($id){
        $data = Subcategory::find($id);
        $data->delete();
        return redirect()->route('brand.list')->with('success', 'Subcategory Delete Sucessfully');
    }

    public function getSubcategories(Request $request) {
        if ($request->category_id) {
            $subcategory = Subcategory::where('category_id', $request->category_id)->get();
            if ($subcategory) {
                return response()->json(['status' => 'success', 'data' => $subcategory], 200);
            }
            return response()->json(['status' => 'failed', 'message' => 'No subcategory found'], 404);
        }
        return response()->json(['status' => 'failed', 'message' => 'Please select subcategory'], 500);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Admin;
use App\User;
use Validator;
use App\Category;
use view;
class CategoryController extends Controller
{




public function __construct(){
$this->middleware('auth:admin');
}

public function index(){
$categories = Category::orderby('id','DESC')->get();
return view('categories.index')->with(['categories'=>$categories]);
}

public function edit(Category $category){
return view('categories.edit',compact('category'));
}

public function create(){
return view('categories.create');
}

public function store(Request $request){       
request()->validate(['catname' => 'required|unique:categories']);

$slug = strtolower($request->catname);
$catvalue = preg_replace('/\s+/', '-', $slug);

$category = new Category;
$category->catname = $request->catname;
$category->catvalue = $catvalue;
$category->save();
// Category::create($request->all());
return redirect()->route('categories.index')->with('success','Add Successfully!'
);
}

public function update(Request $request, Category $category){
request()->validate(['catname' => 'required|unique:categories']);

$slug = strtolower($request->catname);
$catvalue = preg_replace('/\s+/', '-', $slug);

$category->catname = $request->catname;
$category->catvalue = $catvalue;
$category->save();
//Category::update($request->all());
return redirect()->route('categories.index')->with('success','Update Successfully!');
}


public function destroy(Category $category){
$category->delete();
return redirect()->route('categories.index')->with('success','Delete Successfully!');
}



}//main

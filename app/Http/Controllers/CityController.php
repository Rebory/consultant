<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Admin;
use Validator;
use App\City;
class CityController extends Controller
{

	public function __construct(){
                $this->middleware('auth:admin');
}

  // public function __construct() {
        
  //          }

public function index(){
$cities = City::orderby('id','DESC')->get();
return view('cities.index')->with(['cities'=>$cities]);
}

public function edit(City $city){
return view('cities.edit',compact('city'));
}

public function create(){
return view('cities.create');
}

public function store(Request $request){       
request()->validate(['cityname' => 'required|unique:cities']);

$slug = strtolower($request->cityname);
$cityvalue = preg_replace('/\s+/', '-', $slug);

$city = new City;
$city->cityname = $request->cityname;
$city->cityvalue = $cityvalue;
$city->save();
// City::create($request->all());
return redirect()->route('cities.index')->with('success','Add Successfully!'
);
}

public function update(Request $request, City $city){
request()->validate(['cityname' => 'required|unique:cities']);
$slug = strtolower($request->cityname);
$cityvalue = preg_replace('/\s+/', '-', $slug);

$city->cityname = $request->cityname;
$city->cityvalue = $cityvalue;
$city->save();
//City::update($request->all());
return redirect()->route('cities.index')->with('success','Update Successfully!');
}


public function destroy(City $city){
$city->delete();
return redirect()->route('cities.index')->with('success','Delete Successfully!');
}

     

}

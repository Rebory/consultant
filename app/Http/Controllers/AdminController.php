<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Validation\Validator;
use Auth;
use Session;
use App\Admin;
use App\User;
use App\Category;
use Validator;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use \App\MSG91;
use Illuminate\HttpResponse;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
$this->middleware('auth:admin');
}

/**
* Show the application dashboard.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
return view('admin.dashboard');
}

/**
* Show the application dashboard.
*
* @return \Illuminate\Http\Response
*/
public function settings()
{
return view('admin.settings');
}

public function addUser(){
return view('admin.adduser'); //change DP
}


public function adduserSubmit(Request $request){//add user in database

request()->validate([

'name' => 'required|min:6|max:100',
'mobile' => 'required|numeric|unique:users',           
'email' => 'required|email',
'city' => 'required', 
// 'category' => 'required',                

], [

'name.required' => 'Name is required',
'name.min' => 'Name must be at least 3 characters.',
'name.max' => 'Name should not be greater than 100 characters.',

],

[
'mobile.unique' => 'Mobile is already used to another account',
'mobile.required' => 'Mobile is required',
'mobile.min' => 'Mobile must be at least 10 characters.',
'mobile.max' => 'Mobile should not be greater than 13 characters.',
]);


if( $request->hasFile('cover') ) {
$file = $request->file('cover');
$fileName = Auth::user()->id.'-'.date('YmdHis').'.'.$file->getClientOriginalExtension();
$destinationPath = 'images/users/cover'; //upload folder
$path = 'images/users/cover/'.$fileName;  //use for save full path in database
$file = $file->move($destinationPath, $fileName); // Move the file to the upload Folder
}
else{
$path="";
}

$slug = strtolower($request->city);
$cityvalue = preg_replace('/\s+/', '-', $slug);

$user = new User;
$user->name = $request->name;
$user->category= "Immigration Consultant";
$user->email = $request->email;
$user->password = $password = bcrypt('password');
$user->city = $request->city;
$user->cityvalue = $cityvalue;
$user->address = $request->address;
$user->active = 'Y';
$user->mobile = $request->mobile;
$user->landline = $request->landline;
$user->upic = $path;
$user->description = $request->description;
$user->website = $request->website;
$user->map = $request->map;
$user->facebook = $request->facebook;
$user->twitter = $request->twitter;
$user->instagram = $request->instagram;
$user->remember_token = $request->remember_token;
$user->save();
return back()->with('success', 'Profile Create Successfully.');
}


}  //main

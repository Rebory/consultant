<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\User;
use App\City;
use App\Category;
use App\Slider;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use \App\MSG91;

class FrontController extends Controller
{

public function __construct() {

// $navs = Category::all();
// View::share('navs', $navs);// Sharing is caring  //use for data display anywhere like master header footer

}


public function index()
{
      $categories = Category::orderby('id','ASC')->get();
      $cities = City::orderby('id','ASC')->get();
      $datas = User::where('active','=','Y')->orderby('id','DESC')->get();
      return view('index',compact('datas','cities','categories'));
}

public function singlecity($cityvalue)
{  
  $users = User::where('cityvalue','=', $cityvalue)->orderby('id','ASC')->get();
  $recordcount = User::where(['cityvalue'=> $cityvalue,'active' => 'Y'])->get()->count();
  $cities = City::orderby('id','ASC')->get();
  $pagetitle = city::where('cityvalue','=', $cityvalue)->first();// use for just display single city name
  return view('singlecity',compact('users','recordcount','cities','pagetitle'))->paginate(10);
}

public function search(Request $request)
{
    $search= $request->get('k');
    $result = User::where('name','LIKE','%'.$search.'%')->paginate(10);
    return view('search',compact('search','result'));
}

public function singleview($id)
{    
  $single = User::where('id','=', $id)->orderby('id','DESC')->firstOrFail();
  return view('single')->with(['single'=>$single]);
}



 public function sendfeedbackmail(Request $request)
 {
    
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);
     
     $mobileNumber = $request->tomobile;
     $message      = "New Enquery from Immigration Consultant listing Punjab - Name:$request->name , Mobile : $request->mobile , Email : $request->email , Message : $request->message ";
     $MSG91 = new MSG91();
     $msg91Response = $MSG91->sendSMS($mobileNumber,$message);
     
        $data = [
                   'name'        =>  $request->name,
                   'mobile'      =>  $request->mobile,
                   'email'       =>  $request->email,
                   'message'     =>  $request->message
                ];
                       Mail::to($request->to)->send(new SendMail($data));
                       return back()->with('success', 'Thanks for contacting us!');
    }
    
    

}//main

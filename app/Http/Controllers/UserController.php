<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Validator;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use \App\MSG91;
use view;
use Illuminate\HttpResponse;
use Illuminate\Support\Facades\Hash;

// use Carbon\Carbon;
// use Illuminate\Database\Eloquent\Model;
// use Collective\Html\Eloquent\FormAccessible;



class UserController extends Controller
{
    

   
     public function settings()
    {
        return view('users.settings');
    }



   public function verifymobile()
    {
        return view('users.verify');
    }

  public function verifyotp()
    {
        return view('users.verifyotp');
    }


public function sendOTP(Request $request){

request()->validate([
'mobile' => 'required'
]);

$mobileNumber = $request->input('mobile');
$otp = rand(100000,1000000);
$message = "Your Mobile Verification OTP is : $otp";
$MSG91 = new MSG91();
$msg91Response = $MSG91->sendSMS($mobileNumber,$message);
 // $output = json_decode($response);

 $vkey = base64_encode($otp);
User::where(['id' => Auth::user()->id])->update(['vkey'=>$vkey]);

return redirect('/verifyotp')->with('success', 'OTP Sent Successfully on your Registered mobile');
/*else {
return redirect()->back()->with('error','error! try again later');
 }*/

}




public function finalverifyOTP(Request $request){
request()->validate([
'otp' => 'required|min:6'
]);

$formotp = $request->input('otp');
//$otp = base64_decode($formotp);
$otp = base64_decode(Auth::user()->vkey);

if($otp==$formotp){
User::where(['id' => Auth::user()->id,'email' => Auth::user()->email])->update(['active'=>'Y']);
return redirect('/profile')->with('success','Account Successfully verify!');
}
else {
return redirect('/verifyotp')->with('error','Incorrect OTP!');
}}







   public function updatesettings(Request $request){

        request()->validate([

            'name' => 'required|min:3|max:50',
            'mobile' => 'required|numeric',            
            'email' => 'required|email',
            'city' => 'required', 
            // 'category' => 'required',               

        ], [

            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 3 characters.',
            'name.max' => 'Name should not be greater than 50 characters.',

          ],
      
          [

            'mobile.required' => 'Mobile is required',
            'mobile.min' => 'Mobile must be at least 10 characters.',
            'mobile.max' => 'Mobile should not be greater than 10 characters.',
        ]);


$slug = strtolower($request->city);
$cityvalue = preg_replace('/\s+/', '-', $slug);

if (User::where('id', '=', Auth::user()->id)->count() > 0){
User::where(['id' => Auth::user()->id])->update([
                                                'name'           => $request->name,
                                                'category'       => "Immigration Consultant",
                                                'description'    => $request->description,
                                                'email'          => $request->email,
                                                'mobile'         => $request->mobile,
                                                'landline'       => $request->landline,
                                                'city'           => $request->city,
                                                'cityvalue'      => $cityvalue,
                                                'address'        => $request->address,
                                                'website'        => $request->website,
                                                'twitter'        => $request->twitter,
                                                'facebook'       => $request->facebook,
                                                'instagram'      => $request->instagram,
                                                'map'            => $request->map


                                            ]);
        return back()->with('success', 'Update successfully.');
    }

}


public function viewprofile(){
    return view('users.profile');
}

public function editprofile(){
    return view('users.edit-profile');
}

public function settingscover(){
    return view('users.settings-cover'); //change DP
}




public function chkPassword(Request $request){
$data = $request->all();
$current_password = $data['cpass'];
$check_password = User::where(['id' => Auth::user()->id])->first();
if(Hash::check($current_password,$check_password->password)){
echo "true"; die;
}else {
echo "false"; die;
}}


public function updatePassword(Request $request){
request()->validate([
'cpass' => 'required',
'npass' => 'required|string|min:6|max:20'
]);
if($request->isMethod('post')){
$data = $request->all();
$check_password = User::where(['id' => Auth::user()->id])->first();
$current_password = $data['cpass'];
$npass = $data['cpass'];
if(Hash::check($current_password,$check_password->password)){
$password = bcrypt($data['npass']);
User::where(['id' => Auth::user()->id,'email' => Auth::user()->email])->update(['password'=>$password]);
return redirect('/settings')->with('success','Password updated Successfully!');
}
else {
return redirect('/settings')->with('error','Incorrect Current Password!');
}}}



public function updatecover(Request $request)
{    
request()->validate([
'cover' => '|image|mimes:jpeg,jpg,png,gif|required|max:10000'
    // 'cover' => 'required|image|max:2048'
]);

if( $request->hasFile('cover') ) {
$file = $request->file('cover');
$fileName = Auth::user()->id.'-'.date('YmdHis').'.'.$file->getClientOriginalExtension();
$destinationPath = 'images/users/cover'; //upload folder
$path = 'images/users/cover/'.$fileName;  //use for save full path in database
$file = $file->move($destinationPath, $fileName); // Move the file to the upload Folder
}
if (User::where('id', '=', Auth::user()->id)->count() > 0) 
{
User::where(['id' => Auth::user()->id])->update(['upic'=>$path]);
return back()->with('success','Cover Updated Successfully!');
}
else{
return back()->with('error','error try again!');

}
}






} //main

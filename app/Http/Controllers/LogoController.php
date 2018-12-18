<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Logo;
use App\Admin;
use Illuminate\Support\Facades\Hash;
class LogoController extends Controller
{

public function __construct()
   {
        $this->middleware('auth:admin');
     }

public function index(){
$logos = Logo::orderby('id','DESC')->get();
return view('logos.index')->with(['logos' => $logos]);
}


public function edit(Logo $logo)
{
return view('logos.edit')->with(['logo' => $logo]);
}


public function create()
{
return view('logos.create');
}




public function store(Request $request){  

request()->validate([
'image' => 'required|image|max:6000'
]);

if( $request->hasFile('image') ) {
$file = $request->file('image');
$fileName = date('YmdHis',time()).'.'.$file->getClientOriginalExtension();
$destinationPath = 'images/logo'; //upload folder
$path = 'images/logo/'.$fileName;  //use for save full path in database
$file = $file->move($destinationPath, $fileName); // Move the file to the upload Folder
}

$logos = Logo::create([   
'image'        =>  $path,
'size'         =>  $request->size
]);
return redirect()->route('logos.index')->with('success','Save Successfully!');
}


public function update(Request $request, Logo $logo)
{
request()->validate([
'image' => 'image|max:6000'
]);

if( $request->hasFile('image') ) {
$file = $request->file('image');
$fileName = date('YmdHis',time()).'.'.$file->getClientOriginalExtension();
$destinationPath = 'images/logo'; //upload folder
$path = 'images/logo/'.$fileName;  //use for save full path in database
$file = $file->move($destinationPath, $fileName); // Move the file to the upload Folder
}
else
{
$path = $request->input('oldphotourl');
}


$logo->image         = $path;
$logo->size           = $request->size;
$logo->save();

return redirect()->route('logos.index')->with('success','Update Successfully!');
}


public function destroy(Logo $logo){
//$slider->delete();
$path = $logo->image;
if(file_exists($path)){
@unlink($path);
}
$logo->delete();
return redirect()->route('logos.index')->with('success','Delete Successfully!');
}





}//main



            

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudUpdateController extends Controller {
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
public function index(){
$users = DB::select('select * from users');
return view('stud_edit_view',['users'=>$users]);
}
public function show($id) {
$users = DB::select('select * from users where id = ?',[$id]);
return view('stud_update',['users'=>$users]);
}
public function edit(Request $request,$id) {
$name = $request->input('name');
$email = $request->input('email');
$password = $request->input('password');
//$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());
DB::update('update users set name=?,email=?,password=? where id = ?',[$name,$email,$password,$id]);
echo "Record updated successfully.
";
echo '<a href = "/edit-records">Click Here</a> to go back.';
}
} 

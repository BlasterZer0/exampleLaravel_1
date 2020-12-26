<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use PDF;

class UpdateController extends Controller {
    
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
return view('edit_db',['users'=>$users]);
}

public function show($id) {
$users = DB::select('select * from users where id = ?',[$id]);
return view('update_db',['users'=>$users]);
}
public function edit(Request $request,$id) {
$name = $request->input('name');
$email = $request->input('email');
$password = Hash::make($request->input('password'));
$updated_at = date('Y-m-d H:i:s');
//$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());
DB::update('update users set name=?,email=?,password=?,updated_at=? where id = ?',[$name,$email,$password,$updated_at,$id]);
//return redirect()->to('/edit-records');
return redirect('/edit-records')->with('status', 'Registro actualizado con éxito');
}
} 

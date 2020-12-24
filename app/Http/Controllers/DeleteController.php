<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class DeleteController extends Controller {
    
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
public function destroy($id) {
DB::delete('delete from users where id = ?',[$id]);
return redirect('/edit-records')->with('status', 'Registro eliminado con éxito');
}
}

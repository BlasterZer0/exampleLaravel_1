<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudDeleteController extends Controller {
    
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
public function destroy($id) {
DB::delete('delete from users where id = ?',[$id]);
echo "Record deleted successfully.
";
echo '<a href = "/edit-records">Click Here</a> to go back.';
}
}

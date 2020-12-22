<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudDeleteController extends Controller {
public function index(){
$users = DB::select('select * from users');
return view('stud_edit_view',['users'=>$users]);
}
public function destroy($id) {
DB::delete('delete from users where id = ?',[$id]);
echo "Record deleted successfully.
";
echo 'Click Here to go back.';
}
}
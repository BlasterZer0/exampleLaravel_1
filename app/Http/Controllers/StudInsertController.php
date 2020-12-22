<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StudInsertController extends Controller {
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function insertform() {
      return view('stud_create');
   }
	
   public function insert(Request $request) {
      $name = $request->input('name');
      $email = $request->input('email');
      //$password = $request->input('password');
      $hashed = $request->input::get('password');
      $password = Hash::make($hashed);
      //DB::insert('insert into users (name),(email) values(?)',[$name,$email]);
      DB::insert('insert into users (name,email,password) values(?,?,?)',[$name,$email,$password]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller {
   public function insertform() {
      return view('stud_create');
   }
	
   public function insert(Request $request) {
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');
      //DB::insert('insert into users (name),(email) values(?)',[$name,$email]);
      DB::insert('insert into users (name,email,password) values(?,?,?)',[$name,$email,$password]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class InsertController extends Controller {
    
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
      return view('create_db');
   }
    
     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
   public function insert(Request $request) {
      $name = $request->input('name');
      $email = $request->input('email');
      //$password = $request->input('password');
      $hashed = $request->input('password');
      $password = Hash::make($hashed);
      $created_at = date('Y-m-d H:i:s');
      $updated_at = date('Y-m-d H:i:s');
      //DB::insert('insert into users (name),(email) values(?)',[$name,$email]);
      DB::insert('insert into users (name,email,password,created_at,updated_at) values(?,?,?,?,?)',[$name,$email,$password,$created_at,$updated_at]);
      return redirect('/edit-records')->with('status', 'Registro insertado correctamente');
   }
}

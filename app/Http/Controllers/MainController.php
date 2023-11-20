<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  public function show()
  {
    $data = DB::table('student')->get();
    // $data = DB::table('student')->find(6);
    // return $data; // json formate
    // dump ($data); // show rest of the data along with this 
    // foreach ($data as $user)
    // {
    //   echo $user->first_name."<br>";
    // }
    return view('Data',compact('data')); //array format 
  }
  public function showsingle(string $id)
  {
    $data = DB::table('student')->where('id',$id)->get();
    // dd($data); 
    return $data;
  }
  public function particular()
  {
    $data = DB::table('student')
                // ->select('first_name as name')
                // ->distinct()
                // ->get();

              ->pluck('id','first_name');//return a full array
    return $data;
  }
  public function add()
  {
    $student = DB::table('data')
    ->insertGetId(
              [
              'name' => 'harbans',
              'email' => 'harbans@gmail.com',
              'age' => 20,
              'city' => 'ludhiana',
              ],
             
            );
    return $student; 
  }
  public function update()
  {
    $update = DB::table('data')
    ->where('id',1)
    ->decrement('age',2,['city' => 'goa']);
           
    return "record updated "; 
  }
  public function delete(string $id)
  {
    DB::table('student')
    ->where('id',$id)
    ->delete();
           
    return redirect('/show');
  }
}

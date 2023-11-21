<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function display()
    {
        return view('form');
    }

    public function insert(Request $request)
    {
        $data = DB::table('data')
            ->insert([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'city' => $request->city,
            ]);

        return redirect('/view');//->with('data',$data);
    }

    public function view()
    {
        $data=DB::table('data')->get();
        // return redirect('form',compact('data'));
        return view ('view',compact('data'));
    }


    public function showdata(string $id)
    {
        $data = DB::table('data')
                ->find($id);
        return view ('edit',compact('data'));
    }

    public function update(string $id,Request $request)
    {
        $update = DB::table('data')
            ->where('id',$id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'city' => $request->city,
            ]);
        return redirect('view');
    }


    public function deletedata(string $id)
    {
        $data = DB::table('data')
        ->where('id',$id)
        ->delete();
            
        return redirect('/view')->with('data',$data);
    }
}

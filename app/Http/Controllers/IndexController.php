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
        DB::table('data')
            ->insert([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'city' => $request->city,
            ]);

        return view('/view');
    }

    public function view()
    {
        // $data=DB::table('data')->get();
        // return redirect('form',compact('data'));
        return view ('view');
    }
}

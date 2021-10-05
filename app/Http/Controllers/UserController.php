<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = DB::table('users')->get();
        return view('home', compact ('user'));
    }

}

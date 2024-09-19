<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdsController extends Controller
{
    public function index()
    {
       $ads=DB::table('ads')->get();
       $branches=DB::table('branches')->get();
       $users=DB::table('users')->get();
       return view('home',[ 'ads' => $ads  ,'branches' => $branches ]);
    }
}

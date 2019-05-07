<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{

    public function index()
    {
        $githubs = DB::table('users')->where('provider', 'github')->get();
        $gitlabs = DB::table('users')->where('provider', 'gitlab')->get();
        $googles = DB::table('users')->where('provider', 'google')->get();
        $facebooks = DB::table('users')->where('provider', 'facebook')->get();
        $instagrams = DB::table('users')->where('provider', 'instagram')->get();

        return view('welcome', compact('githubs', 'gitlabs', 'googles', 'facebooks', 'instagrams'));
    }
}

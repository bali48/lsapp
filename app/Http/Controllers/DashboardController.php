<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->getId();
        $user = User::find($user_id);
        // echo '<pre>';
        // print_r($user->posts);
        // echo '</pre>';
        return view('dashboard')->with('posts',$user->posts);
    }
}

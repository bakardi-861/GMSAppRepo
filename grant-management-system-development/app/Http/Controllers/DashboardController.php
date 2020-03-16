<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Application;
use Auth;



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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        //return $user;
        //return $user->applications;
        //$applications = collect([$user->applications]);
        return view('dashboard')->with('applications', $user->applications);
    }
}

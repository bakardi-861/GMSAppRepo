<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function admin()
    {
        return view('pages.admin');
    }
    public function applicant()
    {
        return view('pages.applicant');
    }
    public function comittee()
    {
        return view('pages.comittee');
    }
    public function depthead()
    {
        return view('pages.depthead');
    }
    public function submission()
    {
        return view('pages.submission');
    }

    public function about()
    {
        return view('pages.about');
    }
}

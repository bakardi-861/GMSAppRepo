<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IIluminate\Support\Facades\Storage;
use App\Application;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return the 50 most recent applications that have been submitted
        $applications =  Application::orderBy('lname', 'desc')->take(50)->get();
        //$applications =  Application::orderBy('lname', 'desc')->paginate(1);
        return view ('applications.index') ->with('applications', $applications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'dept' => 'required',
            'body' => 'required',
        ]);
        
        //Create Application
        $application = new Application;
        $application->fname = $request->input('fname');
        $application->lname = $request->input('lname');
        $application->department = $request->input('dept');
        $application->approval_step = 1;
        $application->user_id = auth()->user()->id;
        $application->body = $request->input('body');
        $application->save();

        return redirect ('/applications')->with ('success', 'Application Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::find($id);
        return view('applications.show')->with('application', $application);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::find($id);
        return view('applications.edit')->with('application', $application);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'dept' => 'required',
            'body' => 'required',
        ]);
        
        //Update the application
        $application = Application::find($id);
        $application->fname = $request->input('fname');
        $application->lname = $request->input('lname');
        $application->department = $request->input('dept');
        $application->body = $request->input('body');
        $application->save();

        return redirect ('/applications')->with ('success', 'Application Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function find($id)
    {
        $application = Application::where('id', $id);
    }
}

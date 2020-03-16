<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContoller extends Controller
{
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Is this acttually needed?
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'dept' => 'required',
            'body' => 'required',
        ]);
        
        //Update the application
        $user = User::find($id);
        $user->name = $request->input('fname');
        $user->name = $request->input('fname');
        $user->save();

        return redirect ('/applications')->with ('success', 'Application Updated');
    }
}

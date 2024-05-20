<?php

namespace App\Http\Controllers;

use App\Models\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // corrected import statement
use App\Mail\emailMail; // assuming Sendmail is the Mailable class



class emailController extends Controller
{

    function email(){
        return view('index');
    }
    function emailcreate(){
      return view('email');
    }

      function emailsent(Request $request){

        $validatedData = $request->validate([
            'number' => 'required',
            'email' => 'required',
            'text' => 'required',
            
        ]);

        $formEntry = email::create($validatedData);
        Mail::to('hadizaidi687@gmail.com')->send(new emailMail($validatedData));

        redirect()->route('email')->with('success' , 'Form Sent Success Fully?');

      }


}

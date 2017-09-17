<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');

      // check if user with email exists or not

      // $prev_data = Message::all();
      //  Message::find(5);

      $prev_data = Message::where('email',
                              $message->email)
                              ->get();

      if(count($prev_data) > 0 )
      {
        //dont store
        return redirect('/contact')
                ->with('errors_msg',
                'Provided email already exists.');
      }
      else
       {
         $message->save();
         return redirect('/')->with('success', 'Message Stored.');
      }
    } // end of submit


} // end of class

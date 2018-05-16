<?php

namespace kalya\Http\Controllers;

use Illuminate\Http\Request;
use kalya\Appointment;

class ContactCtrl extends Controller
{
    public function index() {
      return view('contact');
    }

    public function contact(Request $request) {
      $contact = new Appointment();

      $contact->name = $request->input('name');
      $contact->email = $request->input('email');
      $contact->contact = $request->input('mobile');
      $contact->message = $request->input('message');
      $contact->save();

      return redirect()->back();
    }
}

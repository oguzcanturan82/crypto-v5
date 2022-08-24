<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactsController extends Controller
{
   public function create_contact(Request $request){
      
      $contact = new Contact;
      
      $contact->fullname = $request->fullname;
      $contact->email = $request->email;
      $contact->phone_number = $request->phone_number;
      $contact->subject = $request->subject;
      $contact->message = $request->message;

      $contactForm = $contact->save();

   }
}

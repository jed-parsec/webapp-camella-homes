<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index () {
        return view ('camela/contact');
    }




    public function store (Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);


        Mail::to('hello@example.com')->send(new Contact($data));
    }
}

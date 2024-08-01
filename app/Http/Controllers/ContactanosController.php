<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
      return view('contactanos.index');
    }

    public function store(Request $request)
    {
       /* return $request->all(); */
       Mail::to('staroffic@gmail.com')
       ->send(new ContactanosMailable($request->all()));
    }
}

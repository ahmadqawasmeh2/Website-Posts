<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
  public function index()
  {
    return view('pages.home');
  }

  public function about()
  {
      return view('pages.about');
  }

  public function prolan()
  {
      return view('pages.proleng');
  }

  public function Contact()
  {
      return view('pages.contact');
  }
}

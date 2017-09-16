<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function getHomePage()
  {
    return view('home');
  } // end of getHomePage

  public function getAboutPage()
  {
    return view('about');
  } // end of getAboutPage

  public function getContactPage()
  {
    return view('contact');
  } // end of getContactPage


} // end of class PagesController

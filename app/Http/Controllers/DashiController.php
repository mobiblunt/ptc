<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashiController extends Controller
{
     public function about() {

        return view('about');


    }

 public function affiliate() {

        return view('affiliate');


    }

 public function contact() {

        return view('contact');


    }

 public function privacy() {

        return view('privacy');


    }

 public function robots() {

        return view('robots');


    }

 public function steps() {

        return view('steps');


    }

 public function terms() {

        return view('terms');


    }
}

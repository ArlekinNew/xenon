<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Service;

class MainController extends Controller
{
    public function index()
    {
    	$services = Service::all();
    	return view('main.index', compact('services'));
    }

    public function aboutus(){
    	return view('main.allshop.aboutus');
    }

    public function contacts(){
    	return view('main.allshop.contacts');
    }

    public function reviews(){
    	return view('main.allshop.reviews');
    }

    public function services(){
    	return view('main.allshop.services');
    }
}

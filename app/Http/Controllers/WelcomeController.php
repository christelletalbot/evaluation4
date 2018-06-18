<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	$hotels = Room::all();
    	return view('pages.welcome_page1', compact('hotels'));
    }

    public static function show($id)
    {
    	$hotels = Room::find($id);
    	return view('pages.welcome_page2', compact('hotels'));
    }
}


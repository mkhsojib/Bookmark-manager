<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'url' => 'required',

        ]);
        
    }
}

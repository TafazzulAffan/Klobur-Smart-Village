<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBumdesController extends Controller
{
    public function index ()
    {
        return view('cms.bumdes.admin');
    }

    public function create()
    {
        return view('cms.bumdes.create');
    }

    public function store(Request $request)
    {
        return $request;
    }
}

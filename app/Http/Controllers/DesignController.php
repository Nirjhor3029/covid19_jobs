<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        return view('design.index');
    }

    public function addSingleWorker()
    {
        return view('design.addSingleWorker');
    }

    public function addSeeker()
    {
        return view('design.add-seeker');
    }



}

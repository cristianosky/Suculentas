<?php

namespace App\Http\Controllers;
use App\cactus;
use Illuminate\Http\Request;

class clientescac extends Controller
{
    public function index()
    {
        $datocus['plantas']=cactus::paginate(5);
        return view('cactus.index', $datocus);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    public function list()
    {
        return view('bidan.role.list');
    }
    public function add()
    {
        return view('bidan.role.add');
    }
}

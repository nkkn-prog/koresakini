<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    //
    public function Hello()
    {
        return view('hello');
    }
}
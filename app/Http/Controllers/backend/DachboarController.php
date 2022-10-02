<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DachboarController extends Controller
{
    public function index(){
        return view('back_end.index');
    }
}

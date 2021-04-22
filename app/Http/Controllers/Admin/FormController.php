<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Query;

class FormController extends Controller
{
    public function form(){
        $querys = Query::get();
        return view('admin.form');
    }
 
}

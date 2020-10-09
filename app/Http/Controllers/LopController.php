<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LopController extends Controller
{
    public function index(){
        return view('danh-sach-lop.index');
    }
}

<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('web.blog.index');
    }

    public function detail()
    {
        return view('web.blog.detail');
    }
}

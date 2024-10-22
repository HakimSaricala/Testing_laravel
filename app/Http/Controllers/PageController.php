<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function overview()
    {
        return view('pages.overview');
    }

    public function philosophy()
    {
        return view('pages.philosophy');
    }

    public function vision()
    {
        return view('pages.vision');
    }
}
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Error404Controller extends Controller
{
    public function index(){
        $data = [
            'title' => '404'
        ];

        return view('frontend.pages.404.404', $data);
    }
}

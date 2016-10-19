<?php

namespace App\Http\Controllers\AMP;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function landing(){
        return view('amp.pages.landing');
    }
}

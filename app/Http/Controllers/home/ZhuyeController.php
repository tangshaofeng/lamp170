<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZhuyeController extends Controller
{
   public function getIndex(){
    return view('home.home.index');
   }
}

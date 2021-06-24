<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packet;

class PageController extends Controller
{
    public function index(){

        $packets = Packet::paginate(12);

        $data = ['pacchetti'=>$packets];
        return view('home',$data);
    }
}

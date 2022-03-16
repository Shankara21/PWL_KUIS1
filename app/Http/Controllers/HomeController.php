<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Home',
            'barangs' => Barang::take(3)->get(),
        ]);
    }

    public function about(){
        return view('about', [
            'title' => 'About',
        ]);
    }

    public function contact(){
        return view('contact', [
            'title' => 'Contact',
        ]);
    }
}

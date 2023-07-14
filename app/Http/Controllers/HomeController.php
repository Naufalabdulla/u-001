<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $collection = ['hiragana', 'katakana', 'kanji'] ;
        return view('home', ['collection' => $collection]);
    }
}

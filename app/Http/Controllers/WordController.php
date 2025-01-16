<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function word($word)
    {
        return view('message.comments', ['h1' => '自由な', 'h2' => $word]);
    }
}

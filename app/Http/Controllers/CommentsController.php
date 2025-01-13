<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimezoneController extends Controller
{
    public function comments($timezone)
    {
        if ($timezone == 'morning') {
            $h1 = '朝';
            $h2 = 'おはようございます';
        } elseif ($timezone == 'afternoon') {
            $h1 = '昼';
            $h2 = 'こんにちは';
        } elseif ($timezone == 'evening') {
            $h1 = '夕方';
            $h2 = 'こんばんは';
        } elseif ($timezone == 'night') {
            $h1 = '夜';
            $h2 = 'おやすみ';
        }
        return view('message.comments', ['h1' => $h1, 'h2' => $h2]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comments($comments)
    {
        if ($comments != 'random') {
            if ($comments == 'morning') {
                $h1 = '朝の';
                $h2 = 'おはようございます';
            } elseif ($comments == 'afternoon') {
                $h1 = '昼の';
                $h2 = 'こんにちは';
            } elseif ($comments == 'evening') {
                $h1 = '夕方の';
                $h2 = 'こんばんは';
            } elseif ($comments == 'night') {
                $h1 = '夜の';
                $h2 = 'おやすみ';
            }
            return view('message.comments', ['h1' => $h1, 'h2' => $h2]);
        } elseif ($comments == 'random') {
            $words = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
            $word = $words[array_rand($words)];
            return view('message.comments', ['h1' => 'ランダムな', 'h2' => $word]);
        }
    }
}

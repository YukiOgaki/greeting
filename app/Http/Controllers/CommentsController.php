<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function Comments($Comment)
    {
        if ($Comment != 'random') {
            if ($Comment == 'morning') {
                $h1 = '朝の';
                $h2 = 'おはようございます';
            } elseif ($Comment == 'afternoon') {
                $h1 = '昼の';
                $h2 = 'こんにちは';
            } elseif ($Comment == 'evening') {
                $h1 = '夕方の';
                $h2 = 'こんばんは';
            } elseif ($Comment == 'night') {
                $h1 = '夜の';
                $h2 = 'おやすみ';
            }
            return view('message.comments', ['h1' => $h1, 'h2' => $h2]);
        } elseif ($Comment == 'random') {
            $words = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
            $word = $words[array_rand($words)];
            return view('message.comments', ['h1' => 'ランダムな', 'h2' => $word]);
        }
    }
}

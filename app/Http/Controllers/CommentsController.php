<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comments($comment, $word = null) //$word = nullで、空白状態をデフォルト化
    {
        if ($comment == 'morning') {
            $h1 = '朝の';
            $h2 = 'おはようございます';
        } elseif ($comment == 'afternoon') {
            $h1 = '昼の';
            $h2 = 'こんにちは';
        } elseif ($comment == 'evening') {
            $h1 = '夕方の';
            $h2 = 'こんばんは';
        } elseif ($comment == 'night') {
            $h1 = '夜の';
            $h2 = 'おやすみ';
        } elseif ($comment == 'random') {
            $words = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
            $word = $words[array_rand($words)];
            $h1 = 'ランダムな';
            $h2 = $word;
        } elseif ($comment == 'freeword') {
            $h1 = '自由な';
            $h2 = $word;
        }
        return view('message.comments', ['h1' => $h1, 'h2' => $h2]);
    }
}

<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function greeting($timeOfDay)
    {
        // あいさつのメッセージ
        $greetings = [  // 連想配列
            'morning' => 'おはようございます',
            'afternoon' => 'こんにちは',
            'evening' => 'こんばんは',
            'night' => 'おやすみなさい',
        ];

        // タイトルの設定
        $titles = [ // 連想配列
            'morning' => '朝のあいさつ',
            'afternoon' => '昼のあいさつ',
            'evening' => '夕方のあいさつ',
            'night' => '夜のあいさつ',
        ];

        // タイトルとメッセージを取得
        $title = $titles[$timeOfDay] ?? 'あいさつ'; // 存在しない場合は 'あいさつ'
        $message = $greetings[$timeOfDay] ?? 'こんにちは'; // 存在しない場合は 'こんにちは'

        // return view('comments.greeting', ['title' => $title, 'message' => $message]);
        return view('comments.common', ['title' => $title, 'message' => $message]);
    }

    public function freeword($word) // 引数を追加
    {
        $title = '自由なメッセージ';    // タイトルを追加

        // return view('comments.freeword', ['title' => $title, 'message' => $word]);
        return view('comments.common', ['title' => $title, 'message' => $word]);
    }

    public function random()
    {
        // ランダムなメッセージのリスト
        $messages = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        // ランダムなメッセージを選択
        $randomMessage = $messages[array_rand($messages)];
        // タイトルの設定
        $title = 'ランダムなメッセージ';


        // return view('comments.random', ['title' => $title, 'message' => $randomMessage]);
        return view('comments.common', ['title' => $title, 'message' => $randomMessage]);
    }
}

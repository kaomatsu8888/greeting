<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function greeting($timeOfDay)
    {
        $greetings = [  // 連想配列
            'morning' => '朝',  // キー => 値
            'afternoon' => '昼',
            'evening' => '夕方',
            'night' => '夜',
        ];

        $title = ucfirst($timeOfDay) . 'のあいさつ';    // ucfirst()で先頭を大文字に
        $message = $greetings[$timeOfDay] ?? 'こんにちは';  // $greetings[$timeOfDay]が存在しない場合は'こんにちは'を代入

        return view('comments.greeting', ['title' => $title, 'message' => $message]);   // view()の第2引数に連想配列を渡す
    }

    public function freeword($word) // 引数を追加
    {
        $title = '自由なメッセージ';    // タイトルを追加
        return view('comments.freeword', ['title' => $title, 'message' => $word]);  // view()の第2引数に連想配列を渡す
    }

    public function random()    
    {
        $messages = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];  // メッセージを配列で用意
        $title = 'ランダムなメッセージ';    // タイトルを追加
        $message = $messages[array_rand($messages)];    // array_rand()で配列からランダムに1つ取得

        return view('comments.random', ['title' => $title, 'message' => $message]); // view()の第2引数に連想配列を渡す
    }
}

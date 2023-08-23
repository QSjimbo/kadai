<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function inputMessage(Request $request)
    {
        // messageを格納する変数を定義
        // テンプレート側で分岐しやすいように空文字列を初期値にする
        $message = "";

        // has()メソッドを利用して該当するSessionを確認
        if ($request->session()->has("message")) {
            // Sessionが存在していればメッセージを取得
            $message = $request->session()->get("message");
        }

        return view("session.form", [
            "message" => $message
        ]);
    }

    public function setSession(Request $request)
    {
        // Sessionへ保存
        $request->session()->put("message", $request->get("message"));

        return redirect("session/inputMessage");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class HomeController extends Controller
{
    //ホーム画面に現在の残高を表示
    public function get_current_amount(){
        //現在ログイン中ユーザのid取得
        $id = auth()->id();
        $amount_data = DB::select("select * from histories where user_id = $id ORDER BY id DESC LIMIT 1");   
             
        //flagを取り出す
        $flag = DB::select("select * from flag");
        return view('home', compact('amount_data','flag'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\History;
use App\Http\Requests\ValidateAmount;

class PurchaseController extends Controller
{
    //フォームを表示
    public function get_purchase(){
        $string = "購入する値段を入力するとQRコードが表示されます。購入するにはQRコードを読み込むか、「購入」をクリックしてください。";
        return view('purchase', ['moji' => $string]);
    }

    //フォーム送信を受け取る
    public function post_purchase(ValidateAmount $request){
        //入力された値段
        $amount = $request->input('amount');
        //バリデーションチェック
        #$validated = $request->validate([
        #    'amount' => 'required | max:2147483647',
        #]);
        //historyテーブルに記録
        $id = auth()->id();
        $time = new Carbon(Carbon::now());
        $time = $time->addHours(9);

        $current_amount = DB::select("select current_amount from histories where user_id = $id ORDER BY id DESC LIMIT 1");
        $c_amount = $current_amount[0]->current_amount; // 必要な値を取り出す
        //現在の所持金 - 入力値
        $a = (float)$c_amount;
        $b = (int)$amount;
        $c = ($a - $b);
        
        History::create([
            'purchase_amount' => $amount,
            'current_amount' => $c,
            'user_id' => $id,
        ]);
        return view('complate_purchase',compact('amount','c'));
    }

    //リダイレクト
    public function p_redirect(){
        return redirect('purchase');
    }
        //計算
        //DB登録
}

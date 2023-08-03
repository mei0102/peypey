<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class HistoryController extends Controller
{
    //購入履歴を表示
    public function get_history(){
        $id = auth()->id();
        $amount_data = DB::select("select * from histories where user_id = $id ORDER BY id DESC LIMIT 20");
        return view('history', ['amount_data' => $amount_data]);
    }
}

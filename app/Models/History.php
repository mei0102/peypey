<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_amount',
        'current_amount',
        'user_id',
    ]; // historyテーブルのカラムを指定
}

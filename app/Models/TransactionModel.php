<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransactionModel extends Model
{
    public function allData()
    {
        return DB::table('transactiontable')->get();
    }

    public function detailData($TransactionID)
    {
        return DB::table('transactiontable')->where('TransactionID', $TransactionID)->first();
    } 
}

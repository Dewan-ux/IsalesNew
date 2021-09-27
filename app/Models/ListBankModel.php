<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListBankModel extends Model
{
    public function allData()
    {
        return DB::table('banktable')->get();
    }

    public function detailData($BankID)
    {
        return DB::table('banktable')->where('BankID', $BankID)->first();
    } 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaksiHajiModel extends Model
{
    public function allData()
    {
        return DB::table('transactionhaji')->get();
    }
}

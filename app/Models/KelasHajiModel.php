<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KelasHajiModel extends Model
{
    public function allData()
    {
        return DB::table('classhajitable')->get();
    }

    public function detailData($ClassID)
    {
        return DB::table('classhajitable')->where('ClassID', $ClassID)->first();
    } 
}

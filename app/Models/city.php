<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class city extends Model
{
    public function allData()
    {
        return DB::table('citytable')->get();
    }

    public function detailData($CityID)
    {
        return DB::table('citytable')->where('CityID', $CityID)->first();
    } 
}

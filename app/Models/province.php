<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class province extends Model
{
     public function allData()
    {
        return DB::table('provincetable')->get();
    }

    public function detailData($ProvinceID)
    {
        return DB::table('provincetable')->where('ProvinceID', $ProvinceID)->first();
    } 
}

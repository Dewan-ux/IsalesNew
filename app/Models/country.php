<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class country extends Model
{
    public function allData()
    {
        return DB::table('countrytable')->get();
    }

    public function detailData($CountryID)
    {
        return DB::table('countrytable')->where('CountryID', $CountryID)->first();
    } 
}

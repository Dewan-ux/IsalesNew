<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaTypeModel extends Model
{
    public function allData()
    {
        return DB::table('latypetable')->get();
    }

    public function detailData($LaTypeID)
    {
        return DB::table('latypetable')->where('LaTypeID', $LaTypeID)->first();
    } 
}

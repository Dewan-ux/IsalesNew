<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TourTypeModel extends Model
{
    public function allData()
    {
        return DB::table('tourtypetable')->get();
    }

    public function detailData($TourTypeID)
    {
        return DB::table('tourtypetable')->where('TourTypeID', $TourTypeID)->first();
    }  
}

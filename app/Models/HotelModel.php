<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HotelModel extends Model
{
    public function allData()
    {
        return DB::table('hotellisttable')->get();
    }

    public function detailData($HotelListID)
    {
        return DB::table('hotellisttable')->where('HotelListID', $HotelListID)->first();
    }    
}

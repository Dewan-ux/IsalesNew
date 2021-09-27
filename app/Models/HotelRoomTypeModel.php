<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HotelRoomTypeModel extends Model
{
    public function allData()
    {
        return DB::table('hotelroomtypetable')->get();
    }

    public function detailData($HotelRoomTypeID)
    {
        return DB::table('hotelroomtypetable')->where('HotelRoomTypeID', $HotelRoomTypeID)->first();
    } 
}

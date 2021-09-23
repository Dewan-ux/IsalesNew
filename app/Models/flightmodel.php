<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class flightmodel extends Model
{
    public function allData()
    {
        return DB::table('flightlisttable')->get();
    }

    public function detailData($FlightListID)
    {
        return DB::table('flightlisttable')->where('FlightListID', $FlightListID)->first();
    }  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class flightclassmodel extends Model
{
    public function allData()
    {
        return DB::table('flightlistclasstable')->get();
    }

    public function detailData($FlightListID)
    {
        return DB::table('flightlistclasstable')->where('FlightListClassID', $FlightListClassID)->first();
    }  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TourModel extends Model
{
    public function allData()
    {
        return DB::table('tourpricetable')->get();
    }

    public function detailData($TourPriceID)
    {
        return DB::table('tourpricetable')->where('TourPriceID', $TourPriceID)->first();
    }  

    public function addData($data)
    {
        return DB::table('tourpricetable')->insert($data);
    } 
}

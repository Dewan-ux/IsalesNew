<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UmrohModel extends Model
{
    public function allData()
    {
        return DB::table('packagetable')->get();
    }

    public function detailData($PackageID)
    {
        return DB::table('packagetable')->where('PackageID', $PackageID)->first();
    }  
}

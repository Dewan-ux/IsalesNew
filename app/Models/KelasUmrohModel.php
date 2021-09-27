<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KelasUmrohModel extends Model
{
    public function allData()
    {
        return DB::table('packageclasstable')->get();
    }

    public function detailData($PackageClassID)
    {
        return DB::table('packageclasstable')->where('PackageClassID', $PackageClassID)->first();
    } 
}

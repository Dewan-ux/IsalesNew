<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaketHajiModel extends Model
{
    public function allData()
    {
        return DB::table('packagehajitable')->get();
    }

    public function detailData($PackageHajiID)
    {
        return DB::table('packagehajitable')->where('PackageHajiID', $PackageHajiID)->first();
    } 

    public function addData($data)
    {
        return DB::table('packagehajitable')->insert($data);
    } 
}

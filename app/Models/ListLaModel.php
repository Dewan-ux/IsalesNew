<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListLaModel extends Model
{
    public function allData()
    {
        return DB::table('lalisttable')->get();
    }

    public function detailData($ListLaID)
    {
        return DB::table('lalisttable')->where('ListLaID', $ListLaID)->first();
    } 

    public function addData($data)
    {
        return DB::table('lalisttable')->insert($data);
    } 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VisaModel extends Model
{
    public function allData()
    {
        return DB::table('visatypetable')->get();
    }

    public function detailData($VisaTypeID) 
    {
        return DB::table('visatypetable')->where('VisaTypeID', $VisaTypeID)->first();
    }

    public function editData($VisaTypeID, $data)
    {
        DB::table('visatypetable')
        ->where('VisaTypeID', $VisaTypeID)
        ->update($data);
    }

    public function deleteData($VisaTypeID)
    {
        DB::table('visatypetable')
        ->where('VisaTypeID', $VisaTypeID)
        ->delete();
    }


}

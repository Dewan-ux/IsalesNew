<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class customer extends Model
{
	protected $table = "customertable";
	protected $primaryKey = "CustomerId";
	protected $fillable = [
		'CustomerId',
		'CustomerFirstName',
		'CustomerMiddleName',
		'CustomerLastName',
		'CustomerIdentification',
		'CustIDTypeID',
		'CustomerStreetAddress',
		'CityCode',
		'ProvinceCode',
		'CountryCode',
		'CustomerPostalCode',
		'CustomerPhoneNumber',
		'CustomerEmail',
		'CustomerTypeID',
		'UserID',
		"TotalJamaah",
		"OrganisationName",
	];
    public function allData()
    {
        return DB::table('customertable')->get();
    }

    public function detailData($CustomerId)
    {
        return DB::table('customertable')->where('CustomerId', $CustomerId)->first();
    } 
}

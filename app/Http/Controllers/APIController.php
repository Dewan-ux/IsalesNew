<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class APIController extends Controller
{
    public function get_all_customer(){
		return response()->json(customer::allData(), 200);
	}
}

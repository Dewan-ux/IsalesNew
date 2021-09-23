<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flightmodel;

class FlightController extends Controller
{
     public function __construct()
    {
        $this->flightmodel = new flightmodel();
    }

    public function index()
    {
        $data = [
                'flight' => $this->flightmodel->allData(),
            ];
        return view('tiket_pesawat.flightlist.list', $data);
    }
	public function detail($FlightListID)
    {
        if (!$this->flightmodel->detailData($FlightListID)) {
            abort(404);
        }

        $data = [
                'flight' => $this->flightmodel->detailData($FlightListID),
            ];
        return view('tiket_pesawat.flightlist.detail', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flightclassmodel;

class FlightClassController extends Controller
{
    public function __construct()
    {
        $this->flightclassmodel = new flightclassmodel();
    }

    public function index()
    {
        $data = [
                'flightclass' => $this->flightclassmodel->allData(),
            ];
        return view('tiket_pesawat.flightclass.class', $data);
    }
	public function detail($FlightListClassID)
    {
        if (!$this->flightclassmodel->detailData($FlightListClassID)) {
            abort(404);
        }

        $data = [
                'flight' => $this->flightclassmodel->detailData($FlightListClassID),
            ];
        return view('tiket_pesawat.flightclass.detail', $data);
    }
}

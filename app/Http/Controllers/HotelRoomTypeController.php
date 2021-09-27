<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelRoomTypeModel;

class HotelRoomTypeController extends Controller
{
    public function __construct()
    {
        $this->HotelRoomTypeModel = new HotelRoomTypeModel();
    }

    public function index()
    {
        $data = [
                'hotelroomtype' => $this->HotelRoomTypeModel->allData(),
            ];
        return view('hotel.roomtype.type', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($HotelRoomTypeID)
    {
        if (!$this->HotelRoomTypeModel->detailData($HotelRoomTypeID)) {
            abort(404);
        }
        $data = [
                'hotelroomtype' => $this->HotelRoomTypeModel->detailData($HotelRoomTypeID),
            ];
            return view('hotel.roomtype.detail', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

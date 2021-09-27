<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourTypeModel;
use DB;

class TourTypeController extends Controller
{
    public function __construct()
    {
        $this->TourTypeModel = new TourTypeModel();
    }

    public function index()
    {
        $data = [
                'tourtype' => $this->TourTypeModel->allData(),
            ];
        return view('tour.tourtype.type', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($TourTypeID)
    {
        if (!$this->TourTypeModel->detailData($TourTypeID)) {
            abort(404);
        }

        $data = [
                'tourtype' => $this->TourTypeModel->detailData($TourTypeID),
            ];
        return view('tour.tourtype.detail', $data);
    }


    public function add()
    {
        return view('tour.tourtype.add');
    }


    public function insert(Request $request)
    {
        DB::table('tourtypetable')->insert([
            'TourTypeCode' => $request->TourTypeCode,
            'TourTypeName' => $request->TourTypeName,
        ]);
        return redirect('tourtype')->with('status', 'Data Added Successfully');
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

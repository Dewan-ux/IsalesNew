<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourModel;

class TourController extends Controller
{
    public function __construct()
    {
        $this->TourModel = new TourModel();
    }

    public function index()
    {
        $data = [
                'tour' => $this->TourModel->allData(),
            ];
        return view('tour.listtour.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($TourPriceID)
    {
        if (!$this->TourModel->detailData($TourPriceID)) {
            abort(404);
        }

        $data = [
                'tour' => $this->TourModel->detailData($TourPriceID),
            ];
        return view('tour.listtour.detail', $data);
    }

    public function add()
    {
        return view('tour.listtour.add');
    }

    public function insert()
    {
        // dd($request->all());

        Request()->validate([
            'TourPriceCode' => 'required|unique:tourpricetable,TourPriceCode|max:100',
            'TourPriceName' => 'required',
            'TourPrice' => 'required',
            'TourItenary' => 'required',
            'TourAvailSeets' => 'required',
            'TourImage' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = Request()->TourImage;
        $fileName = Request()->TourPriceCode . '.' . $file->extension();
        $file->move(public_path('image_tour'), $fileName);

        $data = [
            'TourPriceCode' => Request()->TourPriceCode,
            'TourPriceName' => Request()->TourPriceName,
            'TourPrice' => Request()->TourPrice,
            'TourItenary' => Request()->TourItenary,
            'TourAvailSeets' => Request()->TourAvailSeets,
            'TourImage' => $fileName,
        ];
        
        $this->TourModel->addData($data);
        return redirect('tour')->with('status', 'Data Added Successfully');
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

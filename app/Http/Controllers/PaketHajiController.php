<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketHajiModel;

class PaketHajiController extends Controller
{
    public function __construct()
    {
        $this->PaketHajiModel = new PaketHajiModel();
    }

    public function index()
    {
        $data = [
                'pakethaji' => $this->PaketHajiModel->allData(),
            ];
        return view('haji.pakethaji.paket', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($PackageHajiID)
    {
        if (!$this->PaketHajiModel->detailData($PackageHajiID)) {
            abort(404);
        }
        $data = [
                'pakethaji' => $this->PaketHajiModel->detailData($PackageHajiID),
            ];
        return view('haji.pakethaji.detail', $data);
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

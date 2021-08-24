<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasHajiModel;

class KelasHajiController extends Controller
{
    public function __construct()
    {
        $this->KelasHajiModel = new KelasHajiModel();
    }

    public function index()
    {
        $data = [
                'kelashaji' => $this->KelasHajiModel->allData(),
            ];
        return view('haji.kelashaji.kelas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($ClassID)
    {
        if (!$this->KelasHajiModel->detailData($ClassID)) {
            abort(404);
        }

        $data = [
                'kelashaji' => $this->KelasHajiModel->detailData($ClassID),
            ];
        return view('haji.kelashaji.detail', $data);
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

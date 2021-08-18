<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UmrohModel;

class UmrohController extends Controller
{
    public function __construct()
    {
        $this->UmrohModel = new UmrohModel();
    }

    public function index()
    {
        $data = [
                'umroh' => $this->UmrohModel->allData(),
            ];
        return view('umroh.paket_umroh.paket', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($PackageID)
    {
        if (!$this->UmrohModel->detailData($PackageID)) {
            abort(404);
        }
        $data = [
                'umroh' => $this->UmrohModel->detailData($PackageID),
            ];
            return view('umroh.paket_umroh.detail', $data);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaModel;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->VisaModel = new VisaModel();
    }

    public function index()
    {
        {
            $data = [
                'visa' => $this->VisaModel->allData(),
            ];
            return view('visa.typevisa', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('visa.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {

        Request()->validate([
        'VisaTypeCode' => 'required|unique:visatypetable,VisaTypeCode|min:50|max:100',
        'VisaTypeName' => 'required',
        ], [
            // ini untuk jika validasi tidak ada atau sudah ada maka akan menampilkan pesan kaya dibawah
            // 'VisaTypeCode.unique' => 'This visa type code already exists',
    ]);
        

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
    public function edit($VisaTypeID)
    {
        return view('visa.edit');
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

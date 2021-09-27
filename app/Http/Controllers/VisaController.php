<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaModel;
use DB;

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

    public function insert(Request $request)
    {
        DB::table('visatypetable')->insert([
            'VisaTypeCode' => $request->VisaTypeCode,
            'VisaTypeName' => $request->VisaTypeName,
        ]);
        return redirect('visa')->with('status', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($VisaTypeID)
    {
        if (!$this->VisaModel->detailData($VisaTypeID)) {
            abort(404);
        }
        $data = [
                'visa' => $this->VisaModel->detailData($VisaTypeID),
            ];
            return view('visa.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($VisaTypeID)
    {
        if (!$this->VisaModel->detailData($VisaTypeID)) {
            abort(404);
        }
        $data = [
                'visa' => $this->VisaModel->detailData($VisaTypeID),
            ];
        return view('visa.edit', $data);
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
        Request()->validate([
        'VisaTypeCode' => 'required|min:50|max:100',
        'VisaTypeName' => 'required',
        
    ]);

        $data = [
            'VisaTypeCode' => Request()->VisaTypeCode,
            'VisaTypeName' => Request()->VisaTypeName,
        ];

        $this->VisaModel->editData($VisaTypeID, $data);
        return redirect()->route('visa')->with('pesan', 'Data Edited Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($VisaTypeID)
    {
        $this->VisaModel->deleteData($VisaTypeID);
        return redirect()->route('visa')->with('pesan', 'Data Deleted Successfully');
    }
}

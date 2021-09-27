<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListBankModel;

class ListBankController extends Controller
{
    public function __construct()
    {
        $this->ListBankModel = new ListBankModel();
    }

    public function index()
    {
        $data = [
                'listbank' => $this->ListBankModel->allData(),
            ];
        return view('bank.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($BankID)
    {
        if (!$this->ListBankModel->detailData($BankID)) {
            abort(404);
        }

        $data = [
                'listbank' => $this->ListBankModel->detailData($BankID),
            ];
        return view('bank.detail', $data);
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

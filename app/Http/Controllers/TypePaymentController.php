<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypePaymentModel;
use DB;

class TypePaymentController extends Controller
{
    public function __construct()
    {
        $this->TypePaymentModel = new TypePaymentModel();
    }

    public function index()
    {
        $data = [
                'typepayment' => $this->TypePaymentModel->allData(),
            ];
        return view('payment.typepayment', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('payment.add');
    }


    public function insert(Request $request)
    {
        DB::table('paymenttypetable')->insert([
            'PaymentTypeCode' => $request->PaymentTypeCode,
            'PaymentTypeName' => $request->PaymentTypeName,
        ]);
        return redirect('typepayment')->with('status', 'Data Added Successfully');
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

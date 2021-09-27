<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaTypeModel;
use DB;

class LaTypeController extends Controller
{
    public function __construct()
    {
        $this->LaTypeModel = new LaTypeModel();
    }

    public function index()
    {
        $data = [
                'latype' => $this->LaTypeModel->allData(),
            ];
        return view('LA.latype.type', $data);
    }

    
    public function detail($LaTypeID)
    {
        if (!$this->LaTypeModel->detailData($LaTypeID)) {
            abort(404);
        }

        $data = [
                'latype' => $this->LaTypeModel->detailData($LaTypeID),
            ];
        return view('LA.latype.detail', $data);
    }

    public function add()
    {
        return view('LA.latype.add');
    }

    public function insert(Request $request)
    {
        DB::table('latypetable')->insert([
            'LaTypeCode' => $request->LaTypeCode,
            'LaTypeName' => $request->LaTypeName,
        ]);
        return redirect('latype')->with('status', 'Data Added Successfully');
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

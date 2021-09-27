<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasHajiModel;
use DB;

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

    public function add()
    {
        return view('haji.kelashaji.add');
    }


    public function insert(Request $request)
    {
        DB::table('classhajitable')->insert([
            'ClassCode' => $request->ClassCode,
            'ClassName' => $request->ClassName,
            'Price' => $request->Price,
        ]);
        return redirect('kelashaji')->with('status', 'Data Added Successfully');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasUmrohModel;

class KelasUmrohController extends Controller
{
    public function __construct()
    {
        $this->KelasUmrohModel = new KelasUmrohModel();
    }

    public function index()
    {
        $data = [
                'kelasumroh' => $this->KelasUmrohModel->allData(),
            ];
        return view('umroh.kelas_umroh.kelas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($PackageClassID)
    {
        if (!$this->KelasUmrohModel->detailData($PackageClassID)) {
            abort(404);
        }

        $data = [
                'kelasumroh' => $this->KelasUmrohModel->detailData($PackageClassID),
            ];
        return view('umroh.kelas_umroh.detail', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function add()
    {
        return view('umroh.kelas_umroh.add');
    }

    public function insert(Request $request)
    {
        DB::table('PackageClasstable')->insert([
            'PackageClassCode' => $request->PackageClassCode,
            'PackageClassName' => $request->PackageClassName,
            'Price' => $request->Price,
        ]);
        return redirect('kelasumroh')->with('status', 'Data Added Successfully');
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

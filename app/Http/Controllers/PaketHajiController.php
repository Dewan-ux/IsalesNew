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

    public function add()
    {
        return view('haji.pakethaji.add');
    }

    
    public function insert()
    {
        // dd($request->all());

        Request()->validate([
            'PackageHajiCode' => 'required|unique:packagehajitable,PackageHajiCode|max:100',
            'PackageHajiName' => 'required',
            'PackageHajiDesc' => 'required',
            'Price' => 'required',
            'HajiAvailSeets' => 'required',
            'PackageHajiImage' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = Request()->PackageHajiImage;
        $fileName = Request()->PackageHajiCode . '.' . $file->extension();
        $file->move(public_path('image_haji'), $fileName);

        $data = [
            'PackageHajiCode' => Request()->PackageHajiCode,
            'PackageHajiName' => Request()->PackageHajiName,
            'PackageHajiDesc' => Request()->PackageHajiDesc,
            'Price' => Request()->Price,
            'HajiAvailSeets' => Request()->HajiAvailSeets,
            'PackageHajiImage' => $fileName,
        ];
        
        $this->PaketHajiModel->addData($data);
        return redirect('pakethaji')->with('status', 'Data Added Successfully');
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

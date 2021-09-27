<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListLaModel;

class ListLaController extends Controller
{
    public function __construct()
    {
        $this->ListLaModel = new ListLaModel();
    }

    public function index()
    {
        $data = [
                'listla' => $this->ListLaModel->allData(),
            ];
        return view('LA.listla.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($ListLaID)
    {
        if (!$this->ListLaModel->detailData($ListLaID)) {
            abort(404);
        }

        $data = [
                'listla' => $this->ListLaModel->detailData($ListLaID),
            ];
        return view('LA.listla.detail', $data);
    }

    public function add()
    {
        return view('LA.listla.add');
    }

    public function insert()
    {
        // dd($request->all());

        Request()->validate([
            'ListLaCode' => 'required|unique:lalisttable,ListLaCode|max:100',
            'ListLaName' => 'required',
            'ListLaPrice' => 'required',
            'LaItenary' => 'required',
            'LaAvailSeets' => 'required',
            'LaImage' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = Request()->LaImage;
        $fileName = Request()->ListLaCode . '.' . $file->extension();
        $file->move(public_path('image_la'), $fileName);

        $data = [
            'ListLaCode' => Request()->ListLaCode,
            'ListLaName' => Request()->ListLaName,
            'ListLaPrice' => Request()->ListLaPrice,
            'LaItenary' => Request()->LaItenary,
            'LaAvailSeets' => Request()->LaAvailSeets,
            'LaImage' => $fileName,
        ];
        
        $this->ListLaModel->addData($data);
        return redirect('listla')->with('status', 'Data Added Successfully');
    }

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionModel;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->TransactionModel = new TransactionModel();
    }

    public function index()
    {
        $data = [
                'transaction' => $this->TransactionModel->allData(),
            ];
        return view('transaksi.list', $data);
    }
	public function detail($TransactionID)
    {
        if (!$this->TransactionModel->detailData($TransactionID)) {
            abort(404);
        }

        $data = [
                'flight' => $this->TransactionModel->detailData($TransactionID),
            ];
        return view('transaksi.detail', $data);
    }
}

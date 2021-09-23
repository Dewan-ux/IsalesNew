<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\city;
use App\Models\country;
use App\Models\province;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->customer = new customer();
		$this->city = new city();
		$this->country = new country();
		$this->province = new province();
    }
	
    public function index()
    {
		$data = [
                'customer' => $this->customer->allData(),
            ];
        return view('customer.listcustomer.list', $data);
    }
	
	public function APIIndex(){
		return response()->json($this->customer->allData(), 200);
	}
	
	public function detail($CustomerId)
    {
        if (!$this->customer->detailData($CustomerId)) {
            abort(404);
        }

        $data = [
                'customer' => $this->customer->detailData($CustomerId),
            ];
        return view('customer.listcustomer.detail', $data);
    }
	public function add()
    {
		$data = [
                'city' => $this->city->allData(),
				'country' => $this->country->allData(),
				'province' => $this->province->allData(),
            ];
        return view('customer.listcustomer.add', $data);
    }
	
	public function store(request $request)
    {
		customer::create([
			'CustomerFirstName' => $request->customerfirstname,
			'CustomerMiddleName' => $request->customermiddlename,
			'CustomerLastName' => $request->customerlastname,
			'CustomerIdentification' => $request->customeridentification,
			'CustIDTypeID' => $request->customeridtypeid,
			'CustomerStreetAddress' => $request->customerstreetaddress,
			'CityCode' => $request->citycode,
			'ProvinceCode' => $request->provincecode,
			'CountryCode' => $request->countrycode,
			'CustomerPostalCode' => $request->customerpostalcode,
			'CustomerPhoneNumber' => $request->customerphonenumber,
			'CustomerEmail' => $request->customeremail,
			'CustomerTypeID' => $request->customertypeid,
			'UserID' => $request->userid,
			
		]);
		return redirect('customer');
		//dd($request->all());
    }
	
	public function APIadd()
    {
		$data = [
                'city' => $this->city->allData(),
				'country' => $this->country->allData(),
				'province' => $this->province->allData(),
            ];
        return response()->json($Data, 200);
    }
	
	public function APIstore(request $request)
    {
		$insert_customer = new customer;
			$insert_customer->CustomerFirstName = $request->customerfirstname;
			$insert_customer->CustomerMiddleName = $request->customermiddlename;
			$insert_customer->CustomerLastName = $request->customerlastname;
			$insert_customer->CustomerIdentification = $request->customeridentification;
			$insert_customer->CustIDTypeID = $request->customeridtypeid;
			$insert_customer->CustomerStreetAddress = $request->customerstreetaddress;
			$insert_customer->CityCode = $request->citycode;
			$insert_customer->ProvinceCode = $request->provincecode;
			$insert_customer->CountryCode = $request->countrycode;
			$insert_customer->CustomerPostalCode = $request->customerpostalcode;
			$insert_customer->CustomerPhoneNumber = $request->customerphonenumber;
			$insert_customer->CustomerEmail = $request->customeremail;
			$insert_customer->CustomerTypeID = $request->customertypeid;
			$insert_customer->UserID = $request->userid;
			$insert_customer->save();
		return response('[200] - Data Berhasil Disimpan');
    }
	
	public function destroy($CustomerId){
		$cus = customer::findorfail($CustomerId);
		$cus->delete();
		return back();
	}
	
	public function APIdestroy($CustomerId){
		$cus = customer::findorfail($CustomerId);
		$cus->delete();
		return response('[200] - Data Berhasil Didelete');
	}
	
	public function edit($CustomerId){
		$cus = customer::findorfail($CustomerId);
		$data = [
                'city' => $this->city->allData(),
				'country' => $this->country->allData(),
				'province' => $this->province->allData(),
            ];
		return view('customer.listcustomer.edit', $data , compact('cus'));
	}
	
	public function APIedit($CustomerId){
		$cus = customer::findorfail($CustomerId);
		$data = [
                'city' => $this->city->allData(),
				'country' => $this->country->allData(),
				'province' => $this->province->allData(),
            ];
		return response()->json($cus, 200);
	}
	
	
	public function update(request $request, $CustomerId){
		/*Request()->validate([
		'CustomerFirstName' => 'required',
		'CustomerMiddleName' => 'required',
		'CustomerLastName' => 'required',
		'CustomerIdentification' => 'required',
		'CustIDTypeID' => 'required',
		'CustomerStreetAddress' => 'required',
		'CityCode' => 'required',
		'ProvinceCode' => 'required',
		'CountryCode' => 'required',
		'CustomerPostalCode' => 'required',
		'CustomerPhoneNumber' => 'required',
		'CustomerEmail' => 'required',
		'CustomerTypeID' => 'required',
		'UserID' => 'required',
		]);

        $data = [
			'CustomerFirstName' => Request()->customerfirstname,
			'CustomerMiddleName' => Request()->customermiddlename,
			'CustomerLastName' => Request()->customerlastname,
			'CustomerIdentification' => Request()->customeridentification,
			'CustIDTypeID' => Request()->customeridtypeid,
			'CustomerStreetAddress' => Request()->customerstreetaddress,
			'CityCode' => Request()->citycode,
			'ProvinceCode' => Request()->provincecode,
			'CountryCode' => Request()->countrycode,
			'CustomerPostalCode' => Request()->customerpostalcode,
			'CustomerPhoneNumber' => Request()->customerphonenumber,
			'CustomerEmail' => Request()->customeremail,
			'CustomerTypeID' => Request()->customertypeid,
			'UserID' => Request()->userid,
        ];
		$this->customer->editData($CustomerId, $data);
		*/
		$cus = customer::findorfail($CustomerId);
        $cus->update($request->all());
        return redirect('customer')->with('pesan', 'Data Edited Successfully');
	}
	
	public function APIupdate(request $request, $CustomerId){
		$APIcus = customer::findorfail($CustomerId);
		$cek = customer::firstWhere('CustomerId', $CustomerId);
		if($cek){
			$APIcus->update($request->all());
			return response('[200] - Data Berhasil Diupdate');
		}
		else{
			return response('[404] - Data Tidak Ditemukan',404);
		}
		
	}

	public function Upgradeagent($CustomerId){
		$agent = customer::findorfail($CustomerId);
        return view('customer.listcustomer.Agent', compact('agent'));
	}
	public function Agent(request $request, $CustomerId){
		$agent = customer::findorfail($CustomerId);
        $agent->update($request->all());
        return redirect('customer')->with('pesan', 'Upgrade Agent Successfully');
	}
}

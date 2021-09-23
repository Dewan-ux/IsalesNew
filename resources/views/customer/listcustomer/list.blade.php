@extends('layout.app')
@section('title',' Customer List')


@section('content')
<style>
.column {
  float: left;
  width: 100%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  size: 30px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<a href="/customer/add" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Customer List Data</h3>
            </div>
        <!-- /.box-header -->
            <div style="overflow-x:auto;">
			<div class="column">
              <table class="table table-striped table-hover">
                  
                <tr>
                  <th>Customer ID</th> 
                  <th>Customer First Name</th>
				  <th>Customer Middle Name</th>
				  <th>Customer Last Name</th>
				  <th>Customer Identification</th>
				  <th>Customer ID Type ID</th>
				  <th>Customer Street Address</th>
				  <th>City Code</th>
				  <th>Province Code</th>
				  <th>Country Code</th>
				  <th>Customer Postal Code</th>
				  <th>Customer Phone Number</th>
				  <th>Customer Email</th>
				  <th>Customer Type ID</th>
				  <th>UserID</th>
				  <th>Organisation Name</th>
				  <th>Jumlah Jamaah</th>
				  <th>Action</th>
                </tr>
                  
                
                
                  <?php $no=1; ?>
                    @foreach ($customer as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->CustomerFirstName}}</td>
				  <td>{{ $data->CustomerMiddleName}}</td>
				  <td>{{ $data->CustomerLastName}}</td>
				  <td>{{ $data->CustomerIdentification}}</td>
				  <td>{{ $data->CustIDTypeID}}</td>
				  <td>{{ $data->CustomerStreetAddress}}</td>
				  <td>{{ $data->CityCode}}</td>
				  <td>{{ $data->ProvinceCode}}</td>
				  <td>{{ $data->CountryCode}}</td>
				  <td>{{ $data->CustomerPostalCode}}</td>
				  <td>{{ $data->CustomerPhoneNumber}}</td>
				  <td>{{ $data->CustomerEmail}}</td>
				  <td>{{ $data->CustomerTypeID}}</td>
				  <td>{{ $data->UserID}}</td>
				  <td>{{ $data->OrganisationName}}</td>
				  <td>{{ $data->TotalJamaah}}</td>
                  <td>
                      <a href="/customer/detail/{{ $data->CustomerId }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="/customer/edit/{{ $data->CustomerId }}" class="btn btn-sm btn-warning">Edit</a>
                      <a href="/customer-delete/{{$data->CustomerId}}" class="btn btn-sm btn-danger">Delete</a>
					  <a href="/customer/Upgradeagent/{{$data->CustomerId}}" class="btn btn-primary btn-sm">Agent</a>
                  </td>
                </tr>
                    @endforeach
               
              </table>
			  </div>
			 
@endsection
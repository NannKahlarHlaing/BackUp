@extends('layouts.template')

@section('content')



<div class="container">
	<div class="row">

		<div class="col-lg-6 col-md-6 col-sm-6">
      @if(session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>
      @endif
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
     <form method="POST" action="/schedule">
      @csrf
       <a href="/getorder" class="btn btn-primary" value="Fetch-From-CS-Cart" name="fetch">Fetch From CS-Cart</a>
       <a href="/sendorder" class="btn btn-primary " value="Send-To-ADAMS" name="send">Send To ADMS</a>
       <a href="" class="btn btn-primary disabled" value="Fetch-And-Send" name="fetch_send" >Fetch And Send</a><br>
       
       <!-- <a href="/test" class="btn btn-primary">Test-Send To Adam Manual</a> -->
       <br><br>      </form>
     </div>
     <!-- <a href="/getproduct" class="btn btn-primary">Test</a> -->

     <div class="col-lg-12 col-md-12 col-sm-12 order">
      <h2>Order Data</h2>
      <table id= "myTable" class=" table table-striped">
       <thead>
        <tr>
          <th>Order Date</th>
          <th>Order Id</th>
          <th>User Name</th>
          <th>Email</th>
          <th>Phone No.</th>
          <th>Total</th>
          <th>Order_Status</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody id = "test">
        @foreach($orders as $order)

        <tr>
          <td>
            @php
            $order_date = date("Y-m-d", $order->timestamp);
            @endphp
            {{ $order_date }}
          </td>
          <td>{{ $order->order_id }}</td>
          <td>{{ $order->firstname }} &nbsp; {{ $order->lastname }}</td>
          <td>{{ $order->email }}</td>
          <td>{{ $order->phone }}</td>
          <td>{{ $order->total }}</td>
          <td>{{ $order->status }}</td>
          <td>
            @php
            $status = $order->update_status;
            if($status == 0){
            $update_status = "Queueing";
          }elseif($status == 1){
            $update_status = "Sent";
          }else{
            $update_status = "Duplicate";
          }
        @endphp
        
      {{ $update_status }}</td>
    </tr>


    @endforeach
  </tbody>
</table>
</div>
</div>

</div>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
<script>

  $(document).ready( function () {
    // $('#myTable').DataTable();
    $('#myTable').DataTable( {
      "order": [[ 0, "desc" ]]
    } );
  } );

</script>

<style type="text/css">

  .order{
    background-color: white;
    padding: 30px;
    padding-top: 20px;
    padding-bottom: 20px;
    border-radius: 3px;
    margin-bottom: 20px;
  }
</style>

@endsection
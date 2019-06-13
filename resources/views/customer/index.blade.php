@extends('templates.admin.master')
@section('title')
    Booking
@endsection
@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        MY BOOKING 
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <!-- <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>  -->               
        <!-- <a href=""><button class="btn btn-success"><i class="icon-plus"></i> Add</button></a> -->
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <!-- <th>ID</th> -->
            <th>Garage</th>
            <th>Car</th>
            <th>Car Model</th>
            <th>Service</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($bookings->reverse() as $key => $booking)
            <tr>
                <!-- <td>{{ $key+1 }}</td> -->
                <td>{{ $booking->garage_name }}</td>
                <td>{{ $booking->car_name }}</td>
                <td>{{ $booking->car_model_name }}</td>
                <td>{{ $booking->service_name }}</td>
                <td>{{ $booking->date }}</td>
                <td>{{ $booking->time }}</td>
                @if ($booking->checkout == 0)
                    <td><button class="btn btn-info">Pending</button></td>
                @elseif($booking->checkout == 1 && $booking->status == 0) 
                    <td><button class="btn btn-success">Payment</button></td>
                @elseif($booking->checkout == 1 && $booking->status == 1)
                    <td><button class="btn btn-primary">Pending</button></td>
                @endif
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <!-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <!-- <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li> -->
            {{-- $bookings->links() --}}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@endsection
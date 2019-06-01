@extends('templates.admin.master')
@section('title')
    Management Feedback
@endsection
@section('content')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Feedback Management
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-2 m-b-xs">             
        <a href="{{ route('admin.service.add') }}"><button class="btn btn-success"><i class="icon-plus"></i> Add</button></a>
      </div>
      <div class="col-sm-7">
        @if (Session::has('msg'))
        <p style="color: red">{{ Session::get('msg') }}</p>
        @endif
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Search</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>No</th>
            <th>Customer Email</th>
            <th>Message</th>
            <th>Start Rated</th>
            <th>Function</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($feedbacks as $key => $feedback)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $feedback->email }}</td>
            <td><span class="text-ellipsis">{{ $feedback->message }}</span></td>
            <td>
                <div class='rating-stars'>
                    <ul id='stars'>
                      @for($i=1; $i<=5 ; $i++)
                        @if($i <= $feedback->start_rate)
                            <li class='star selected' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                            </li>
                        @else
                            <li class='star' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                            </li>
                        @endif
                      @endfor  
                    </ul>
                </div>
            </td>
            <td>
              <a href="" class="active" ui-toggle-class=""><button class="btn btn-info"><i class="icon-edit"></i> active</button></a>
              <a href="" class="active" ui-toggle-class=""><button class="btn btn-danger"><i class="icon-trash"></i> delete</button></a>
            </td>
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
            {{ $feedbacks->links() }}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
<style type="text/css">
  .rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}

</style>
@endsection
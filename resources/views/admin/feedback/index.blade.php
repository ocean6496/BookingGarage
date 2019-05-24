@extends('templates.adminTLE.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Management feedback
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-reply-all"></i> Feedback</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header" style="padding: 10px 0px">
                <!-- <h3 class="box-title">Hover Data Table</h3> -->
                    <div class="col-xs-1">
                        <a href="">
                            <!-- <button class="btn btn-success"><i class="fa fa-plus"></i> Add</button> -->
                        </a>
                    </div>
                    <div class="col-xs-6">
                        @if(Session::has('msg'))
                            <h4 style="color: red">{{ Session::get('msg') }}</h4>
                        @endif
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Customer Email</th>
                            <th>Message</th>
                            <th>Start Rated</th>
                            <th>Function</th>
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
                              <a href="" class="active" ui-toggle-class=""><button class="btn btn-info"><i class="fa fa-edit"></i> active</button></a>
                              <a href="" class="active" ui-toggle-class=""><button class="btn btn-danger"><i class="fa fa-trash"></i> delete</button></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    <div style="text-align-last: right; padding: 0px 10px">
                        {{ $feedbacks->links() }}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
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


@extends('templates.adminTLE.master')
@section('title')
    Edit service
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit service
            <!-- <small>Control panel</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-street-view"></i> service</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <!-- right column -->
        	<div class="col-md-12">
          	<!-- Horizontal Form -->
          		<div class="box box-info">
           	  		<div class="box-header with-border">
              			<!-- <h3 class="box-title">Horizontal Form</h3> -->
            		</div>
            		<!-- /.box-header -->
            		<!-- form start -->
           			<form class="form-horizontal" method="post" action="{{ route('admin.service.edit', ['id' => $service->id]) }}">
           				{{ csrf_field() }}
              			<div class="box-body">
	                		<div class="form-group">
	              				<label for="inputEmail3" class="col-sm-3 control-label">Name service</label>
	                  			<div class="col-sm-6">
	                    			<input type="text" class="form-control" name="name" value="{{ $service->name }}">
	                  			</div>
	                		</div>
	                		<div class="form-group">
	                  			<label for="inputPassword3" class="col-sm-3 control-label">Description</label>
	                  			<div class="col-sm-6">
	                    			<input type="text" class="form-control" name="description" value="{{ $service->description }}">
	                  			</div>
	                		</div>
	                		<div class="form-group">
	                  			<label for="inputPassword3" class="col-sm-3 control-label">Price</label>
	                  			<div class="col-sm-6">
	                    			<input type="text" class="form-control" name="price" value="{{ $service->price }}">
	                  			</div>
	                		</div>
	                		<div class="form-group">
	                			<label for="inputPassword3" class="col-sm-5 control-label"></label>
	                  			<div class="col-sm-4">
	                    			<input type="submit" class="btn btn-info" value="Submit">
	                  			</div>
	                		</div>
              			</div>
            		</form>
          		</div>
        	</div>
        	<!--/.col (right) -->
      	</div>
      	<!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
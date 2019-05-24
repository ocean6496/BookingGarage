@extends('templates.adminTLE.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Contact
            <!-- <small>Control panel</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-phone-square"></i> Contact</a></li>
            <li class="active">Add</li>
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
           			<form class="form-horizontal" method="post" action="{{ route('admin.contact.add') }}">
           				{{ csrf_field() }}
              			<div class="box-body">
	                		<div class="form-group">
	              				<label for="inputEmail3" class="col-sm-3 control-label">Name Contact</label>
	                  			<div class="col-sm-6">
	                    			<input type="text" class="form-control" name="name" placeholder="Fill the Name" required="">
	                  			</div>
	                		</div>
	                		<div class="form-group">
	                  			<label for="inputPassword3" class="col-sm-3 control-label">Email</label>
	                  			<div class="col-sm-6">
	                    			<input type="text" class="form-control" name="email" placeholder="Fill the Email" required="">
	                  			</div>
	                		</div>
	                		<div class="form-group">
	                  			<label for="inputPassword3" class="col-sm-3 control-label">Content</label>
	                  			<div class="col-sm-6">
	                    			<input type="text" class="form-control" name="content" placeholder="Fill the Content" required="">
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
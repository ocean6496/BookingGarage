@extends('templates.admin.master')
@section('title')
    Add Customer
@endsection
@section('content')
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
	        <div class="col-lg-12">
		        <section class="panel">
		            <header class="panel-heading">
		                Add Customer
		            </header>
		            <div class="panel-body">
		                <form action="{{ route('garageAdmin.customer.add') }}" class="form-horizontal bucket-form" method="post">
		                	{{ csrf_field() }}
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Username</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control" name="username">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Email</label>
		                        <div class="col-sm-6">
		                            <input type="email" class="form-control" name="email">
		                           <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Password</label>
		                        <div class="col-sm-6">
		                            <input type="password" class="form-control round-input" name="password">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Full Name</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="fullname">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Address</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="address">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Phone</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="phone">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                    	<label class="col-sm-5 control-label"></label>
		                        <div class="col-sm-2">
		                            <input type="submit" class="btn btn-info">
		                        </div>
		                    </div>
		                </form>
		            </div>
		        </section>
	        </div>
        </div>
        <!-- page end-->
    </div>
	</section>
</section>
@endsection
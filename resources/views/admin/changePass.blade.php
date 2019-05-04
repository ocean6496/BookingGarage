@extends('templates.admin.master')
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
		                Change Password
		            </header>
		            <div class="panel-body">
		                <form action="{{ route('admin.changePassword') }}" class="form-horizontal bucket-form" method="post" id="form">
		                	{{ csrf_field() }}
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">New Password</label>
		                        <div class="col-sm-6">
		                            <input type="password" class="form-control" name="password" required="" autocomplete="off">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">New Password Confirmation</label>
		                        <div class="col-sm-6">
		                            <input type="password" class="form-control" name="confirmPassword" required="">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                    	<label class="col-sm-3 control-label"></label>
		                        <div class="col-sm-6">
		                        	@if(Session::has('msg'))
										<h4 style="color: red">{{ Session::get('msg') }}</h4>
		                        	@endif
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
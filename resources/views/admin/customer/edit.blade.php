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
		                Edit customer
		            </header>
		           <div class="panel-body">
		                <form class="form-horizontal bucket-form" method="post" action="{{ route('admin.customer.edit', ['id' => $customer->id]) }}">
		                	{{ csrf_field() }}
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Full Name</label>
		                        <div class="col-sm-6">
		                            <input class="form-control" type="text" name="fullname" value="{{ $customer->fullname }}">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Address</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="address" value="{{ $customer->address }}">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Phone</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="phone" value="{{ $customer->phone }}">
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
        </div>
        <!-- page end-->
    </div>
	</section>
</section>
@endsection
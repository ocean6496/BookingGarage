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
		                Edit Garage
		            </header>
		           <div class="panel-body">
		                <form class="form-horizontal bucket-form" method="post" action="{{ route('admin.garage.edit', ['id' => $garage->id]) }}">
		                	{{ csrf_field() }}
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Name</label>
		                        <div class="col-sm-6">
		                            <input class="form-control" type="text" name="name" value="{{ $garage->name }}">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Address</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="address" value="{{ $garage->address }}">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Phone</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="phone" value="{{ $garage->phone }}">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Proprietor</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="proprietor" value="{{ $garage->proprietor }}">
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
@extends('templates.admin.master')
@section('title')
    Detail Service
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
		                View Detail Service
		            </header>
		            <div class="panel-body">
		                <form action="{{ route('garageAdmin.service') }}" class="form-horizontal bucket-form" method="get">
		                	{{ csrf_field() }}
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Name service</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control" name="name" value="{{ $service->name }}" disabled="">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Description</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control" name="description" value="{{ $service->description }}" disabled="">
		                           <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Price</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input" name="price" value="{{ $service->price }}" disabled="">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                    	<label class="col-sm-5 control-label"></label>
		                        <div class="col-sm-2">
		                            <input type="submit" class="btn btn-info" value="Back">
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
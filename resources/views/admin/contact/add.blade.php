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
		                Add Service
		            </header>
		            <div class="panel-body">
		                <form action="{{ route('admin.contact.add') }}" class="form-horizontal bucket-form" method="post">
		                	{{ csrf_field() }}
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Name contact</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control" name="name" required="">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Email</label>
		                        <div class="col-sm-6">
		                            <input type="email" class="form-control" name="email" required="">
		                           <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Content</label>
		                        <div class="col-sm-6">
		                            <textarea class="form-control round-input" name="content" required=""></textarea>
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
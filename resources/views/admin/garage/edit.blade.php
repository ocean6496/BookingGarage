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
		                <form class="form-horizontal bucket-form" method="get">
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Default</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Help text</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control">
		                           <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Rounder</label>
		                        <div class="col-sm-6">
		                            <input type="text" class="form-control round-input">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Input focus</label>
		                        <div class="col-sm-6">
		                            <input class="form-control" id="focusedInput" type="text" value="This is focused...">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                    	<label class="col-sm-3 control-label"></label>
		                        <div class="col-sm-6">
		                            <input type="submit" class="form-control">
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
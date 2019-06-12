@extends('templates.adminTLE.master')
@section('title')
    Management service
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Management service
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-street-view"></i> service</a></li>
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
                        <a href="{{ route('admin.service.add') }}">
                            <button class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
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
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Function</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <a href="{{ route('admin.service.edit', ['id' => $service->id]) }}" class="active" ui-toggle-class="">
                                        <button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
                                    </a>
                                    <a href="{{ route('admin.service.delete', ['id' => $service->id]) }}" class="active" ui-toggle-class="">
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div style="text-align-last: right; padding: 0px 10px">
                        
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
@endsection


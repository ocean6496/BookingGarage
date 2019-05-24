@extends('templates.adminTLE.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Management contact
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-phone-square"></i> Contact</a></li>
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
                        <a href="{{ route('admin.contact.add') }}">
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
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Content</th>
                                <th>Function</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->content }}</td>
                                <td>
                                    <a href="{{ route('admin.contact.delete', ['id' => $contact->id]) }}" class="active" ui-toggle-class="">
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div style="text-align-last: right; padding: 0px 10px">
                        {{ $contacts->links() }}
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


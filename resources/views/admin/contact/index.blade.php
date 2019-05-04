@extends('templates.admin.master')
@section('content')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        CONTACT
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-2 m-b-xs">
        <!-- <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>  -->               
        <a href="{{ route('admin.contact.add') }}"><button class="btn btn-success"><i class="icon-plus"></i> Add</button></a>
      </div>
      <div class="col-sm-7">
        @if (Session::has('msg'))
        <p style="color: red">{{ Session::get('msg') }}</p>
        @endif
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Search</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Content</th>
            <th>Function</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($contacts as $contact)
          <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td><span class="text-ellipsis">{{ $contact->content }}</span></td>
            <td>
              <a href="{{ route('admin.contact.delete', ['id' => $contact->id]) }}" class="active" ui-toggle-class=""><button class="btn btn-danger"><i class="icon-trash"></i> delete</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <!-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <!-- <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li> -->
            {{ $contacts->links() }}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@endsection
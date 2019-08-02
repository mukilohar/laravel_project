@extends('layouts.app')
@section('content')
<div class="col-xs-12">
  <a href="{{route('stores.create')}}" class="btn btn-primary">Add New</a>
<div class="box">

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($stores as $store)
                  <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>{{$store->address}}</td>
                    <td>{{$store->description}}</td>
                    <td>
                      <a class="btn btn-info" href="{{route('stores.edit', ['store' => $store])}}"><i class="fa fa-edit"></i></a>
                      <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                @endforeach
            
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>
@endsection




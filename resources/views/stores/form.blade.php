@extends('layouts.app_admin')
@section('content')




<div class="col-xs-12">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="box box-primary">
        @isset($store)
            <form role="form" action="{{route('stores.update', ['id'=>$store->id])}}" method="post">
            @method('put')
        @endisset

        @empty($store)
            <form role="form" action="{{route('stores.store')}}" method="post">
            @method('post')
        @endempty
        
        @csrf        
        
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$store->name??old('name')}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" placeholder="Enter Address" name="address" value="{{$store->address??old('address')}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{$store->description??old('description')}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
</div>
@endsection





@extends('admin.layouts.master')

@section('title','index')

@section('content')
  <div class="row">
      <div class="col-md-2">
          <a href="{{ route('customers.create') }}" class="btn btn-outline-primary">Add</a>
      </div>
      <div class="col-md-10"></div>
  </div>
  <br>
  <form action="" method="POST" class="form-horizontal" role="form">      
      <div class="row">    
        <div class="col-md-10 col-sm-10 search">                    
          <input type="search" name="searchvalue" id="input" class="form-control" value="" placeholder="nhập email hoặc tên"> 
        </div>
        <br>
        <div class="col-md-10 col-sm-10 search">                    
          <input type="search" name="searchvalue" id="input" class="form-control" value="" placeholder="nhập địa chỉ"> 
        </div>
        <br>
        <div class="col-md-10 col-sm-10 search">                    
          <input type="search" name="searchvalue" id="input" class="form-control" value="" placeholder="nhập số điện thoại"> 
        </div>
        <br>
        <div class="col-md-10 col-sm-10 search">                    
          <input type="search" name="searchvalue" id="input" class="form-control" value="" placeholder="nhập tuổi từ"> 
        </div>
        <br>
        <div class="col-md-10 col-sm-10 search">                    
          <input type="search" name="searchvalue" id="input" class="form-control" value="" placeholder="đến tuổi"> 
        </div>
        <br>
        <div class="col-md-4 col-sm-4 search">
          <button type="submit" value="search" class="btn btn-outline-info">Search</button>
        </div>
      </div>
             
    </form>    
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">Tel</th>
          <th scope="col">Birthday</th>
          <th scope="col">Country</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customers as $key => $customer)
            
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->tel }}</td>
            <td>{{ $customer->birthday }}</td>
            <td>{{ $customer->country }}</td>
            <td>{{ $customer->gender_text }}</td>
            <td>
              <a href="{{ route('customers.edit', ['id' => $customer->id])}}" class="btn btn-outline-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('customers.delete', ['id' => $customer->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('{{ __('message.confirm_delete') }}')"
                    class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  @endsection()

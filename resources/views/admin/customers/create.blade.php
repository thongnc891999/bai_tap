@extends('admin.layouts.master')

@section('title', 'create')

@section('content')
    <form action="{{ route('customers.store') }}" method="POST" class="form-horizontal" role="form">
        @csrf
        <div class="row">
            <div class="col-md-10 col-sm-10 search">
                <input type="text" name="name" id="input" class="form-control" value=""
                    placeholder="Name">
            </div>
            <br>
            <div class="col-md-10 col-sm-10 search">
                <input type="text" name="email" id="input" class="form-control" value=""
                    placeholder="Email">
            </div>
            <br>
            <div class="col-md-10 col-sm-10 search">
                <input type="text" name="address" id="input" class="form-control" value=""
                    placeholder="Address">
            </div>
            <br>
            <div class="col-md-10 col-sm-10 search">
                <input type="date" name="birthday" id="input" class="form-control" value=""
                    placeholder="Birthday">
            </div>
            <br>
            <div class="col-md-10 col-sm-10">
                <input type="radio" name="gender" id="input" value="1">
                <label for="">Nam</label><br>
                <input type="radio" name="gender" id="input" value="2">
                <label for="">Nu</label>
            </div>
            <br>
            <div class="col-md-4 col-sm-4 search">
                <button type="submit"  class="btn btn-outline-info">Create</button>
            </div>
        </div>
    </form>
@endsection()

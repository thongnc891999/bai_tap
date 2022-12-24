@extends('admin.layouts.master')

@section('title', 'edit')

@section('content')
    <form action="{{ route('customers.update', $customer->id) }}" method="POST" class="form-horizontal" role="form">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <input type="text" name="name" id="input" class="form-control" value="{{ $customer->name }}" placeholder="Name">
            </div>
            <br>
            <div class="col-md-10 col-sm-10">
                <input type="text" name="email" id="input" class="form-control" value="{{ $customer->email }}" placeholder="Email">
            </div>
            <br>
            <div class="col-md-10 col-sm-10">
                <input type="text" name="address" id="input" class="form-control" value="{{ $customer->address }}"
                    placeholder="Address">
            </div>
            <br>
            <div class="col-md-10 col-sm-10">
                <input type="date" name="birthday" id="input" class="form-control" value="{{ $customer->birthday }}"
                    placeholder="Birthday">
            </div>
            <br>
            <div class="col-md-10 col-sm-10">
                <input type="radio" name="gender" id="input" value="1" {{ $customer->gender == 1 ? 'checked' : '' }}>
                <label for="">Nam</label><br>
                <input type="radio" name="gender" id="input" value="2" {{ $customer->gender == 2 ? 'checked' : '' }}>
                <label for="">Nu</label>
            </div>
            <br>
            <div class="col-md-4 col-sm-4">
                <button type="submit" class="btn btn-outline-info">Edit</button>
            </div>
        </div>
    </form>
@endsection()

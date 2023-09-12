@extends('layouts.app-master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form style="padding: 10px;" action="{{ route('user-details.store') }}" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal">User Details</h1>
                @include('layouts.partials.messages')
                <div class="form-group form-floating mb-3">
                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                    <label for="first_name">First Name</label>
                </div>
                <div class="form-group form-floating mb-3">
                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                    <label for="last_name">Last Name</label>
                </div>
                <div class="form-group form-floating mb-3">
                    <input type="text" name="city" id="city" class="form-control" required>
                    <label for="city">City</label>
                </div>
                <div class="form-group form-floating mb-3">
                    <input type="text" name="state" id="state" class="form-control" required>
                    <label for="state">State</label>
                </div>
                <div class="form-group form-floating mb-3">
                    <input type="text" name="address" id="address" class="form-control" required>
                    <label for="address">Address</label>
                </div>
                <button  class="btn btn-dark" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
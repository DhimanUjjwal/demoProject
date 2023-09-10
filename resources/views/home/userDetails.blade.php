@extends('layouts.app-master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Details</div>

                <div class="card-body">
                    <form action="{{ route('user-details.store') }}" method="POST">
                        @csrf
                        <div class="form-group form-floating mb-3">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required>
                        </div>
                        <div class="form-group form-floating mb-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>
                        <div class="form-group form-floating mb-3">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" required>
                        </div>
                        <div class="form-group form-floating mb-3">
                            <label for="state">State</label>
                            <input type="text" name="state" id="state" class="form-control" required>
                        </div>
                        <div class="form-group form-floating mb-3">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" required></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

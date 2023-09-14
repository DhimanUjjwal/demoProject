@extends('layouts.auth-master')

@section('content')
<div id="dashboard1">
    <div class="row">
        <div id="sidebar" class="col-md-4">
            <!-- Left side with links (1/3 width) -->
            <ul class="list-group">
                <a id='a' href="http://127.0.0.1:8000/dashboard/about" class="list-group-item">About</a>
                <a id='ps' href="http://127.0.0.1:8000/dashboard/profile-setting" class="list-group-item">Profile Setting</a>
                <a href="#" class="list-group-item">Deposit</a>
                <a id='o' href="http://127.0.0.1:8000/dashboard/orders" class="list-group-item">Orders</a>
                <a href="#" class="list-group-item">Hiring</a>
                <a href="#" class="list-group-item">Favorite</a>
                <a href="#" class="list-group-item">Review</a>
                <a href="#" class="list-group-item">Transaction</a>
                <a href="#" class="list-group-item">Orders</a>
                <a href="https://www.google.com" class="list-group-item">Google</a>
            </ul>
        </div>
        <div class='col-md-8'>
            @yield('dashboard')
        </div>  
    </div>
</div>
@endsection
<style>
    #dashboard1{
        padding-bottom: clamp(60px, 6vw, 80px);
        padding-top: clamp(60px, 6vw, 80px);
    }
    .row{
        width: 100%;
        padding-right: var(--bs-gutter-x,.75rem);
        padding-left: var(--bs-gutter-x,.75rem);
        margin-right: auto;
        margin-left: auto;
    }
    
    .list-group{
        font-size: large;
        display: flex;
        gap: 10px;
    }
    .list-group-item:hover{
        background-color:black;
        color: aliceblue;
        cursor: pointer;
    }
    a{
        text-decoration:none;
    }

</style>
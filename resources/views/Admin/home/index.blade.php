@extends('admin.layouts.app-master')

@section('content')
<div>
    @auth('admin')
    <h1>Admin Dashboard</h1>
    <p class="lead">Only authenticated Admin can access this section.</p>
    @endauth

    @guest('admin')
    <div>
        <h1>Admin, Please Login</h1>
    </div>

    @endguest
</div>

@endsection
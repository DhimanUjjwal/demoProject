@extends('layouts.app-master')
@section('content')

    <h1>User List</h1>

    <ul class="list-group">
        @foreach ($users as $item)
            <li class="list-group-item">
                <p class="mb-1"><strong>Email:</strong> {{ $item->email }}</p>
                <p class="mb-1"><strong>Full Name:</strong> {{ $item->first_name . ' ' . $item->last_name }}</p>
                <p class="mb-0"><strong>Address:</strong> {{ $item->address }}</p>
            </li>
        @endforeach
    </ul> 

@endsection


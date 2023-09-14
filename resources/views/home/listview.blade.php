@extends('layouts.app-master')
@section('content')
<!-- <div id="container">
    <div id="centered-div">
            <h1>Listed Influencer</h1>

        <ul class="list-group">
            @foreach ($users as $item)
                <li class="list-group-item">
                    <p class="mb-1"><strong>Email:</strong> {{ $item->email }}</p>
                    <p class="mb-1"><strong>Full Name:</strong> {{ $item->first_name . ' ' . $item->last_name }}</p>
                    <p class="mb-0"><strong>Address:</strong> {{ $item->address }}</p>
                </li>
            @endforeach
        </ul> 
        <div class="pagination">
            <button>{{ $users->links() }}</button>
        </div>
    </div>
</div>    -->

<div id="container">
    <div id="centered-div">

        @foreach ($users as $item)
        @include('layouts.partials.userCard',['user' => $item])
        @endforeach

    </div>
    <!-- Pagination Bar -->
    <ul class="pagination">
        @if ($users->currentPage() > 1)
        <li>
            <a href="{{ $users->previousPageUrl() }}" class="btn btn-light" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        @endif
        @for ($i = 1; $i <= $users->lastPage(); $i++)
            <li class="{{ $users->currentPage() == $i ? 'active' : '' }}">
                <a href="{{ $users->url($i) }}" class="btn btn-light">
                    {{ $i }}
                </a>

            </li>
            @endfor
            @if ($users->currentPage() < $users->lastPage())
                <li>
                    <a href="{{ $users->nextPageUrl() }}" aria-label="Next" class="btn btn-light">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                @endif
    </ul>
</div>

<style>
    #centered-div {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 14px;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 2rem;
        border: 1px solid #ccc;
        height: 100%;
    }

    #container {
        padding: 2rem 1rem;
        background-color: #26202e;

    }

    #centered-div {
        background-color: #e8e5ffa1;
        border: 1px solid #ccc;
    }

    .pagination {
        display: flex;
        justify-content: flex-end;
        /* Shift to the extreme right */
        padding-top: 2rem;
        list-style: none;
        gap: 10px;
    }
</style>
@endsection
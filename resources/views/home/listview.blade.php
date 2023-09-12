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
        <h1>Listed Influencer</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                    <td>{{ $item->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Bar -->
        <ul class="pagination">
            @if ($users->currentPage() > 1)
                <li>
                    <button class="btn btn-outline-dark">
                        <a href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </button>
                </li>
            @endif
            @for ($i = 1; $i <= $users->lastPage(); $i++)
                <li class="{{ $users->currentPage() == $i ? 'active' : '' }}">
                    <button class="btn btn-outline-dark">
                        <a href="{{ $users->url($i) }}">
                            {{ $i }}
                        </a>
                    </button>
                </li>
            @endfor
            @if ($users->currentPage() < $users->lastPage())
                <li>
                    <button class="btn btn-outline-dark">
                        <a href="{{ $users->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </button>
                </li>
            @endif
        </ul>


        </ul>
    </div>
</div>

<style>
#container {
  padding: 3%;  
  background-color: #26202e;
}

#centered-div {
  background-color: #e8e5ffa1;
  border: 1px solid #ccc;
}

.pagination {
    display: flex;
    justify-content: flex-end; /* Shift to the extreme right */
    padding-right: 10px;
    list-style: none;
}
</style>
@endsection


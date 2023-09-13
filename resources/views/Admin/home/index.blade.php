@extends('admin.layouts.app-master')

@section('content')
<div>
    @auth('admin')
    <h1>Admin Dashboard</h1>
    <p class="lead">Only authenticated Admin can access this section.</p>

    @section('content')
        <div id="container">
            <div id="centered-div">
                <h1>Listed Influencer</h1>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>
                                <a href="{{ route('admin.updateStatus', ['email' => $item->email]) }}" class="status-link">
                                    <div class="status-circle {{ $item->status == 1 ? 'active' : 'inactive' }}"></div>
                                </a>
                            </td>
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

        .status-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }

        /* CSS for the active status circle */
        .status-circle.active {
            background-color: green;
        }

        /* CSS for the inactive status circle */
        .status-circle.inactive {
            background-color: red;
        }
        </style>
    @endsection


    @endauth

    @guest('admin')
    <div>
        <h1>Admin, Please Login</h1>
    </div>

    @endguest
</div>

@endsection
@extends('layouts.app-master')

@section('content')
<div>
    @auth
    <h1>Dashboard</h1>
    <p class="lead">Only authenticated users can access this section.</p>
    @endauth

    @guest
    <div class="hero">
        <div class="hero-content">
            <h1>First Influencer Hiring</h1>
            <h1>Platform in The World</h1>
            <p>Hire talented influencers at the most affordable cost to get the most out of your time and cost</p>
            <div id="searchBoxID" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <div class="input-group">
                    <input id="inputName" type="text" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-light" type="button" id="searchButton">
                        &#x1F50E;&#xFE0E;
                    </button>
                </div>
                <ul id="searchResults" class="list-group"></ul>
            </div>
        </div>
    </div>

    @endguest
</div>

<style>
    .hero {
        background-image: url("{{ asset('images/banner.png') }}");
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 20px;
    }

    /* Style the hero content */
    .hero-content {
        max-width: 600px;
        /* Adjust the max width as needed */
        padding: 20px;
        border-radius: 5px;
        text-align: left;
        background-color: #002c4a;
        color: bisque;
    }

    .list-group-item {
        color: #fafdff;
        background-color: #212529;
        border: 1px solid rgba(0, 0, 0, .125);
    }

    @media screen and (max-width: 768px) {
        .hero {
            justify-content: center;
            background-color: #002c4a;
            background-image: none;
        }

        .hero-content {
            width: 100%;
            text-align: center;
            height: 60%;

        }
    }
</style>

<script>
    $(document).ready(function() {
        // Add an event listener to the search button
        var flag ;
        $('#searchButton').click(function() {
            // Get the search query from the input field
            var searchQuery = $('#inputName').val();

            // Perform an AJAX request to fetch search results
            $.ajax({
                url: '/get-user-details', // Replace with your server endpoint
                method: 'get', // Adjust the HTTP method as needed
                data: {
                    query: searchQuery
                }, // Send the search query as data
                success: function(results) {
                    // Clear the search results list before adding new items
                    $('#searchResults').empty();
                    $('#searchResults').show();

                    // Iterate through the search results and add them as list items
                    $.each(results.userDetails, function(index, result) {
                        var listItem = $('<a>').addClass('list-group-item dark').text(result.full_name);
                        flag = true;
                        $('#searchResults').append(listItem);
                    });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });

        });


        $('body').click(function() {
            if (flag == true) {
                $('#searchResults').hide();
            }

        });

    });
</script>

@endsection
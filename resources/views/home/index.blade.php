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
            <form id="searchBoxID" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <div class="input-group">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-light" type="button" id="searchButton">
                        &#x1F50E;&#xFE0E;
                    </button>
                </div>
            </form>
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
@endsection
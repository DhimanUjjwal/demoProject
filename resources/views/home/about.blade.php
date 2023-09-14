@extends('home.dashboard')
    @section('dashboard')
    <form style="background-color: blanchedalmond; padding:10px" action="#">
        @csrf
        <h1>About</h1>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram Handle:</label>
            <input type="text" name="instagram" id="instagram" class="form-control">
        </div>

        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter Handle:</label>
            <input type="text" name="twitter" id="twitter" class="form-control">
        </div>

        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook Handle:</label>
            <input type="text" name="facebook" id="facebook" class="form-control">
        </div>

        <div class="mb-3">
            <label for="about" class="form-label">About Yourself:</label>
            <textarea name="about" id="about" rows="4" cols="50" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endsection
<style>
    #a {
    pointer-events: none;
    cursor: default; 
    color:dimgrey; 
    text-decoration: none; 
    font-weight: bold;
    }
</style>
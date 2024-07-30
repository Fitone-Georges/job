@extends('layout')
@section('content')

<div class="container">
    <h1 class="text-center my-4">Choose your role</h1>
    <form action="{{ route('registration.post') }}" method="POST">
    
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Job Seeker</h5>
                        <p class="card-text">Search and apply for job openings.</p>
                        <label>
                            <input type="radio" name="role" value="job_seeker" required>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Job Poster</h5>
                        <p class="card-text">Post job offers and find candidates.</p>
                        <label>
                            <input type="radio" name="role" value="job_poster" required>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">NEXT</button>
        </div>
    </form>
</div>


@endsection

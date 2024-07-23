@extends('layout')
@section('title','js posts list')
    @section('content')
        <div class="container">

            @if(Auth::user()->role=='job_seeker')
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Company Name</th>
                        <th scope="col">email</th>
                        <th scope="col">job_description</th>
                        <th scope="col">salary_wages</th>
                        <th scope="col">Enterprise Domain</th>
                        <th scope="col">Enterprise Location</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user?->Company Name}}</td>
                            <td>{{$user?->email}}</td>
                            <td>{{$user?->job_description}}</td>
                            <td>{{$user?->salary_wages}}</td>
                            <td>{{$user?->Enterprise Domain}}</td>
                            <td>{{$user?->Enterprise Location}}</td>
                            <td><a href="show" class="btn btn-primary able" tabindex="-1" role="button" aria-abled="true">Show Post</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                
            @endif

        </div>
    @endsection


@extends('layout')
@section('title', 'js posts list')
@section('content')
    <div class="container">
        {{-- <form action="{{route('search.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px"> --}}
        {{-- @csrf --}}

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Company Name</th>
                    <th scope="col">email</th>
                    <th scope="col">Job Description</th>
                    <th scope="col">salary_wages</th>
                    <th scope="col">Enterprise Domain</th>
                    <th scope="col">Enterprise Location</th>
                    <th scope="col">Qualification</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->company_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->job_description }}</td>
                        <td>{{ $user->salary_wages }}</td>
                        <td>{{ $user->enterprise_domain }}</td>
                        <td>{{ $user->enterprise_location }}</td>
                        <td>{{ $user->qualification }}</td>
                        <td>
                            @if (Auth::user()->role === 'job_seeker')
                                <a href="{{ route('job') }}" class="btn btn-primary able" tabindex="-1" role="button" aria-abled="true">Apply</a>
                            @else
                                <a class="btn btn-secondary disabled" tabindex="-1" role="button" aria-abled="true">Not Eligible</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
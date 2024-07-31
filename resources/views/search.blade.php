@extends('layout')
@section('title', 'js posts list')
@section('content')
    <div class="container">
        {{-- <form action="{{route('search.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px"> --}}
        {{-- @csrf --}}

        <!-- @if (Auth::user()->role === 'job_seeker') -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Company Name</th>
                    <th scope="col">email</th>
                    <th scope="col">Job Description</th>
                    <th scope="col">salary_wages</th>
                    <th scope="col">Enterprise Domain</th>
                    <th scope="col">Enterprise Location</th>

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
                        <td>
                            <a href="{{ route('job') }}" class="btn btn-primary able" tabindex="-1" role="button"
                                aria-abled="true">Apply</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!--
@else
    @endif -->

    </div>
@endsection

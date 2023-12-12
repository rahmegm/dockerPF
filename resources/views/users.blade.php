@extends('master')

@section('content')

<a href="{{ route('users.create'}}">Create</a>

<hr>

<h2>Users</h2>

<ul>

    @foreach ($users as $user)

        <li>{{$user->firstName}}</li>

    @endforeach
</ul>


@endsection
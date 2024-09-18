@extends('app')

@section('content')

<h1>
    Seja bem vindo {{$user->name}}
</h1>

<a href="{{route('login.logout')}}">
    Logout
</a>

@endsection
@extends('layouts.default')

@section('content')
    @foreach($users as $user)
        <li>{{ $user->email }}</li>
    @endforeach
@stop
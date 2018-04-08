@extends('layouts.default')
@section('title', $title)
@section('content')
<div class="col-md-offset-2 col-md-8">
    <h1>{{$title}}</h1>
    <ul class="users">
        @foreach ($users as $user)
            @include('users._user')
        @endforeach
    </ul>
</div>
@stop
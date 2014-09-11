@extends('layouts.master')

@section('content')
    @forelse($posts as $post)
        <h1 class="glyphicon glyphicon-user"> {{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    @empty
        <p>No hay información que mostrar</p>
    @endforelse
@stop

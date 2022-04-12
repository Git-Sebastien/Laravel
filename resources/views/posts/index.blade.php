@extends('layouts.app')

@section('index')
@foreach ($post as $data)
    <x-card-post title="{{ $data->title }}" content="{{ $data->content }}"/>
@endforeach

@endsection
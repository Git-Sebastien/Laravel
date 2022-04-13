@extends('layouts.app')

@section('index')
@foreach ($post as $data)
    <x-card-post title="{{ Str::of($data->title)->toHtmlString }}" content="{{ Str::of($data->content)->toHtmlString }}"/>
@endforeach

@endsection
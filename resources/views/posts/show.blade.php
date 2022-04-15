@extends('layouts.app')

@section('show')
    <x-card-article title="{{$post->title }}" content="{{ Str::of($post->content)->toHtmlString() }}" author="{{ Str::of($post->author)->toHtmlString() }}"/>
@endsection
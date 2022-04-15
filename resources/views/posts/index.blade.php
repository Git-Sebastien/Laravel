@extends('layouts.app')

@section('index')
<h3 class="title-category border-bottom slide-in from-left">Tous les articles</h3>
@foreach ($post as $data)
    <x-card-post title="{{ Str::of($data->title)->toHtmlString() }}" content="{{ Str::limit(Str::of($data->content)->toHtmlString(),150) }}" author="{{ Str::of($data->author)->toHtmlString() }}" route="{{ route('posts.show',$data->id) }}"/>
@endforeach

@endsection



@extends('layouts.app')

@section('posts')

@if ($posts->isEmpty())
    <h3 class="text-center text-secondary title-category-empty">Aucun article présent dans cette catégories</h3>
@else
    @foreach ($posts as $post)
    <h3 class="title-category border-bottom slide-in from-left">{{ Str::of(request()->route('name'))->toHtmlString() }}</h3>
    <x-card-post title="{{ Str::of($post->title)->toHtmlString() }}" content="{{ Str::limit(Str::of($post->content)->ToHtmlString(),140) }}"  author="{{ Str::of($post->author)->ToHtmlString }}" route="{{ route('posts.show',$post->id)}}" />
    @endforeach
@endif
   
@endsection



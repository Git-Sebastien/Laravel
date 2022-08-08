@extends('layouts.app')

@section('posts')

@if ($posts->isEmpty())
    <h3 class="text-center text-secondary title-category-empty">Aucun article présent dans cette catégories</h3>
@else
    <h3 class="title-category border-bottom slide-in from-left">{{ Str::of(request()->route('name'))->toHtmlString() }}</h3>
    @foreach ($posts as $post)
    <x-card-post 
    title="{{ Str::of($post->title)->toHtmlString() }}" 
    content="{{ Str::of(Str::limit($post->content,140))->ToHtmlString() }}"  
    author="{{ Str::of($post->author)->ToHtmlString }}" 
    route="{{ route('posts.show',$post->id)}}" />
    @endforeach
@endif
   
@endsection



@extends('layouts.app')
    @section('home')
        <x-banner/>
        <h3 class="title-category border-bottom slide-in from-left">Dernier article</h3>
        <x-card-post 
            title="{{ Str::of($objectSort->title)->toHtmlString() }}" 
            content="{{ Str::of(Str::limit($objectSort->content,150))->ToHtmlString() }}" 
            created_at="{{ $objectSort->created_at }}" 
            author="{{ Str::of($objectSort->author)->toHtmlString() }}" 
            route="{{ route('posts.show',$objectSort->id) }}"
        />
        <h3 class="title-category border-bottom slide-in from-left">A propos</h3>   
        <x-card-about/>
    @endsection




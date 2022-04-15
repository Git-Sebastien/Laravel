@extends('layouts.app')



@section('home')
    <x-banner/>
    <h3 class="title-category border-bottom slide-in from-left">Dernier article</h3>
    <x-card-post title="{{ Str::of($objectSort->title)->toHtmlString() }}" content="{{ Str::limit(Str::of($objectSort->content)->toHtmlString(), 100) }}" created_at="{{ $objectSort->created_at }}" author="{{ Str::of($objectSort->author)->toHtmlString() }}" route="{{ route('posts.show',$objectSort->id) }}"/>
    <h3 class="title-category border-bottom slide-in from-left">Jeux vidéo</h3>   
    <x-card-post-mini/>
    <x-card-about/>
@endsection


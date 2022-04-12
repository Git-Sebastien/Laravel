@extends('layouts.app')



@section('home')
    <x-banner/>
    <x-card-post title="{{ Str::of($objectSort->title)->toHtmlString  }}" content="{{ Str::of($objectSort->content)->toHtmlString }}"/>
    <x-card-post-mini/>
    <x-card-about/>
@endsection


@extends('layouts.app')

@section('edit')
        <x-edit name="{{ Str::of($post->author)->toHtmlString() }}" title="{{ Str::of($post->title)->toHtmlString() }}" content="{{ Str::of($post->name)->toHtmlString() }}"/>
@endsection
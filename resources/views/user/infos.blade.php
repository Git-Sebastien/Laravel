@extends('layouts.app')

@php
    $image_path = empty(Auth::user()->image_path) ? Auth::user()->default_image : Auth::user()->image_path;
@endphp
@section('user')
    <x-user-info name="{{ Auth::user()->name }}" email="{{ Auth::user()->email }}" createdAt="{{ Auth::user()->created_at }}" route="{{ route('upload_image',Auth::user()->id) }}" image="{{ asset('images/avatar/'.$image_path) }}"/>
@endsection

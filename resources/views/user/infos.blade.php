@extends('layouts.app')


@section('user')
    <x-user-info name="{{ Auth::user()->name }}" email="{{ Auth::user()->email }}" createdAt="{{ Auth::user()->created_at }}" route="{{ route('upload_image',Auth::user()->id) }}"  image="{{ asset('images/avatar/'.Auth::user()->image_path) }}"/>
@endsection

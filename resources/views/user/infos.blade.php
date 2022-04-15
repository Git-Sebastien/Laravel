@extends('layouts.app')

@section('user')
    <x-user-info name="{{ Auth::user()->name }}" email="{{ Auth::user()->email }}" createdAt="{{ Auth::user()->created_at }}"/>
@endsection

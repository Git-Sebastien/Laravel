@extends('layouts.app')

@php
    $image_path = empty($userInfos->image_path) ? $userInfos->default_image : $userInfos->image_path;
@endphp
@section('user')
    <x-user-info name="{{ $userInfos->name }}" 
        email="{{ $userInfos->email }}" 
        createdAt="{{ $userInfos->created_at }}" 
        route="{{ route('upload_image',$userInfos->id) }}" 
        role="{{ $sortRole->role }}" 
        image="{{ asset('images/avatar/'.$image_path) }}" 
        idUser="{{ $userInfos->id }}"/>
@endsection

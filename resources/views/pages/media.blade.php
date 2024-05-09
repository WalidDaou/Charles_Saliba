@extends('layouts.main')

@section('head')
<title>Media</title>
@endsection


@section('content')

@component('components.title')
<x-slot name="title">My Media</x-slot>
<x-slot name="content"></x-slot>

@endcomponent

@include('components.media.video-preview')

@include('components.home.contact-us')

@include('components.home.footer')



@endsection
@extends('layouts.main')

@section('head')
<title>Leadership</title>
@endsection

@section('content')

@component('components.leadership.main-image')

<x-slot name="category">leadership/{{$firstLeadership->title}}</x-slot>
<x-slot name="image">{{$firstLeadership->image}}</x-slot>
<x-slot name="logo">{{$firstLeadership->logo}}</x-slot>

@endcomponent

@include('components.leadership.articles')

@include('components.home.contact-us')

@include('components.home.footer')


@endsection
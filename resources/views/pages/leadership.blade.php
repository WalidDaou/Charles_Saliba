@extends('layouts.main')

@section('head')
<title>Leadership</title>
@endsection

@section('content')

@include('components.leadership.main-image')

@include('components.leadership.articles')

@include('components.home.contact-us')

@include('components.home.footer')


@endsection
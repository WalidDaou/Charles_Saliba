@extends('layouts.main')

@section('head')
<title>Info Book</title>
@endsection


@section('content')


@include('components.books.info')

@include('components.home.contact-us')

@include('components.home.footer')



@endsection
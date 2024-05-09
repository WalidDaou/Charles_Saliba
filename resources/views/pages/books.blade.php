@extends('layouts.main')

@section('head')
<title>Books</title>
@endsection


@section('content')

@component('components.title')
<x-slot name="title">Books</x-slot>
<x-slot name="content"></x-slot>

@endcomponent

@include('components.books.books-preview')

@include('components.home.contact-us')

@include('components.home.footer')



@endsection
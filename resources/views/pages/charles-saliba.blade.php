@extends('layouts.main')

@section('head')
<title>Charles Saliba</title>
@endsection


@section('content')

@component('components.charle.main-img')

<x-slot name="content">The Positive Influencer, The Entrepreneur, The Thinker, The Author, The Consultant, And The Advisor Of Leaders</x-slot>
<x-slot name="image">charles/charle</x-slot>
<x-slot name="logo"></x-slot>

@endcomponent

@include('components.charle.info')

@include('components.charle.previously')

@include('components.charle.functional-expertise')

@include('components.home.contact-us')

@include('components.home.footer')



@endsection
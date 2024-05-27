@extends('layouts.main')

@section('head')
<title>Contact Us</title>
@endsection


@section('content')


@component('components.title')
<x-slot name="title">Book An Appointment</x-slot>
<x-slot name="content"></x-slot>

@endcomponent

@include('components.contact-us.call-email')

@include('components.contact-us.contact-form')


@include('components.home.contact-us')

@include('components.home.footer')



@endsection
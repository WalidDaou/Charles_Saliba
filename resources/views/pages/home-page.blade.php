@extends('layouts.main')


@section('head')
<title>Home</title>
@endsection

@section('content')

@include('components.home.main-title')

@component('components.home.main-image')


@endcomponent

<div id="mySite" class="relative main-title-container min-h-[600px] mt-[20px]">

    <div class="absolute top-0 left-0  z-[11]">
        @component('components.title')
        <x-slot name="title">Welcome To My Site</x-slot>
        <x-slot name="content">My name is Charles Samir Saliba, a 50 years young learner and seeker of truth, no matter how relative it may seem! My friends and acquaintances know me by different names; Charles the Positive Influencer, the Entrepreneur, the Thinker, the Author, the Consultant, and the Advisor of Leaders. Although among those names, the one I prefer the most is Charles the Good Friend. For the past 30 years I have put my head into field and advisory work around Organizational Strategies, Human Capital, and Leadership Development. Yet, along the way I did my best to promote positive thinking, good governance, youth and local talent, institutionalization of SMEs, and innovation in nurturing dreams. To realize this, I worked with tens of brilliant intellectuals, academicians, consultants, government officials, international organizations, interns and students, most of whom have become very dear friends. My authorship journey has produced more than 200 articles, 12 unpublished books, and tens of presentations and speeches delivered to all sorts of audiences young and old, local and international, engaged and disengaged. I write about Governance, Human Resources, Leadership, Politics, Economy, and Society issues at large. Yet, the closes topic to my heart is that of ‘Change’. Actually, two of my books “Making Sense in Changing World” and “Make Your Own Cheese” profoundly address the topic of Change within the context of the global dynamic that is disrupting the world of Generation Y and backward. I would like to thank you for visiting my website in which you will find an abundance of my writings and big ideas that you can download with my compliments. And if you are interested to talk, work, or engage with me on any of your endeavors, do not hesitate to reach out; my coordinates are in the ‘Talk to Charles’ section. I do hope that you benefit from my thoughts on the various topics I address, and would be very glad to talk to you on any topic, ideas, or initiative that you need advice or contribution from a grey haired learner!</x-slot>

        @endcomponent
    </div>

    <div class="h-full w-full main-container absolute top-0 left-0 z-[10] ">
        <div class="w-full h-full relative flex justify-end">
            <img class="h-full w-[auto] object-cover opacity-[0.3]" src="/svgs/home/logo-message.svg" alt="">
            <div class="h-full w-full bg-white opacity-[0.8] absolute top-0 left-0 "></div>
        </div>
    </div>

</div>

<div id="authorship">
    @include('components.home.authorship')
</div>

<div id="media">
    @include('components.home.vision', ['title'=> 'Experience My Creative Vision Through Media' ,'link' => 'media' ])
</div>


<!-- @include('components.home.video-carousel') -->

@include('components.home.video-animation')

<div id="books">
    @include('components.home.vision', ['title'=> 'Books That Transform And Inspire' , 'link' => 'books'])
</div>

@include('components.home.books-carousel')

@include('components.home.message')

@include('components.home.journey')


<div id="resume">
    @component('components.home.expertise')

    @endcomponent
</div>


@include('components.home.contact-us')

@include('components.home.footer')

@endsection
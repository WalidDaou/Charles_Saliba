<div class="w-screen flex flex-row justify-between pt-[50px] items-center">

@component('components.title')

<x-slot name="title">{{$title}}</x-slot>
<x-slot name="content"></x-slot>

@endcomponent

<div class="main-container">
    <button onclick="window.location.href='/{{$link}}'" class="hovered">View All</button>
</div>

</div>
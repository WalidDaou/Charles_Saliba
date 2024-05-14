<div class="vision w-screen flex flex-row justify-between pt-[35px] items-center">

@component('components.title')

<x-slot name="title">{{$title}}</x-slot>
<x-slot name="content"></x-slot>

@endcomponent

<div class="main-container button-title">
    <button onclick="window.location.href='/{{$link}}'" class="hovered">View All</button>
</div>

</div>
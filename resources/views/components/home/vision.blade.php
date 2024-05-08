<div class="w-screen flex flex-row justify-between pt-[50px] items-center">

@component('components.title')

<x-slot name="title">{{$title}}</x-slot>
<x-slot name="content"></x-slot>

@endcomponent

<div class="main-container">
    <button class="font w-[150px] h-[35px] bg-[#135D66]  text-white font-12px hovered">View All</button>
</div>

</div>
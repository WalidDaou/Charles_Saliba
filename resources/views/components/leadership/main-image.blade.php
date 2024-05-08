<div class="w-screen main-container h-[465px] bg-[#EDEDED] background flex flex-col justify-end gap-[20px] pb-[30px]" style="background-image: url('/images/leadership/{{$firstLeadership->image}}.jpg');">
    <p class="font font-bold font-40px text-white font font-bold font-40px">Leadership</p>
    <div class="flex flex-row gap-[15px]">

        <div class="w-[40px] h-[40px]">
            <img class="w-full h-full" src="/svgs/home/{{$firstLeadership->logo}}.svg" alt="">
        </div>
        <div class="flex flex-col gap-[5px]">
            <p class="opacity-[0.6] font font-semibold font-12px text-white">Category</p>
            <p class="font font-semibold font-16px text-white">{{$firstLeadership->title}}</p>
        </div>

    </div>
</div>
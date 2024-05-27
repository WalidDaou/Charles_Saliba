<div id="contactUs" class="mt-[60px] margin-contact">


    <div class="w-screen main-container h-[300px] flex flex-col gap-[40px] justify-center bg-[#135D66]">

        <p class="font font-40px font-bold max-w-[80vw] text-white"> Let’s stay in touch</p>
        <div class="relative w-full h-[55px]">
            <input class="w-full h-full input-1 font font-normal font-16px text-black pl-[20px]" placeholder="Enter your Email Address" type="text" name="" id="">
            <div class="flex justify-end items-center w-[auto] h-full absolute top-0 right-0 pr-[15px]">
                <button onclick="scrollContact()" class="hovered">Share</button>
            </div>
        </div>
    </div>


</div>


<script>
    function scrollContact() {


        var currentPath = window.location.pathname;
        if (currentPath === '/contact-us') {

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        } else {
            window.location.href = '/contact-us';
        }
    }
</script>
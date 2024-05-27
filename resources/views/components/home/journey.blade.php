<div class="pt-[100px]">

    <div id="myJourney" class="w-screen h-[auto] background " style="background-image: url('/images/home/journay.jpg');">


        <div class="w-full main-container pt-[20px] flex justify-between items-center">
            <p class="font font-bold font-40px">My Journey</p>
            <div class="flex gap-[20px]">
                <button id="scrollLeftButton" class=""><img class="h-[35px] w-[35px]" src="/svgs/home/left.svg" alt=""></button>
                <button id="scrollRightButton" class=""><img class="h-[35px] w-[35px]" src="/svgs/home/right.svg" alt=""></button>
            </div>
        </div>


        <div id="bigContainer" class="relative mt-[50px]">


            <div id="smallContainer" class="journey-scroll cursor-grab main-container flex flex-row w-screen overflow-x-scroll absolute top-0 left-0 z-[10]">


                @foreach($journey as $index => $item)
                @if($index % 2 == 0)
                <div id="div_{{$index}}" class=" flex flex-row gap-[20px] h-[150px] justify-start items-start">
                    <div class="flex flex-col gap-[5px] justify-center items-center h-full">
                        <div class="w-[25px] h-[25px] flex justify-center items-center relative">
                            <img class="w-full h-full" src="/svgs/home/journay-white.svg" alt="">
                            <div class="w-full h-full justify-center items-center flex absolute top-0 left-0">
                                <img class="w-[8px]" src="/svgs/home/journey-green.svg" alt="">
                            </div>
                        </div>
                        <div class="w-[1px] h-full border-[0.8px] border-black opacity-[0.2]">
                        </div>
                        <div>
                            <img class="w-[12px]" src="/svgs/home/journey-green.svg" alt="">
                        </div>
                    </div>
                    <div class="flex flex-col gap-[5px] h-full">
                        <p class="font font-semibold font-18px text-[#135D66]">
                            {{ $item->date }}
                        </p>
                        <p class="journey-width font font-normal font-16px min-w-[200px] max-w-[280px] ">
                            {{ $item->content }}
                        </p>
                    </div>

                </div>

                @else
                <div id="div_{{$index}}" class="main-container-right flex flex-row gap-[20px] h-[300px] mt-[140px] justify-start items-start">
                    <div class="flex flex-col gap-[5px] justify-center items-center h-[150px]">

                        <div>
                            <img class="w-[12px]" src="/svgs/home/journey-green.svg" alt="">
                        </div>
                        <div class="w-[1px] h-full border-[0.8px] border-black opacity-[0.2]">
                        </div>
                        <div class="w-[25px] h-[25px] flex justify-center items-center relative">
                            <img class="w-full h-full" src="/svgs/home/journay-white.svg" alt="">
                            <div class="w-full h-full justify-center items-center flex absolute top-0 left-0">
                                <img class="w-[8px]" src="/svgs/home/journey-green.svg" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="flex flex-col gap-[15px] h-full pt-[130px]">
                        <p class="font font-semibold font-18px text-[red]">
                            {{ $item->date }}
                        </p>
                        <p class="journey-width font font-normal font-16px min-w-[200px] max-w-[280px] ">
                            {{ $item->content }}
                        </p>
                    </div>

                </div>
                @endif


                @endforeach


            </div>

            <div class="w-full absolute top-[145px] left-0 z-[8] h-[1px] border-dashed border-t-[2px] border-black opacity-[0.4]" style="border-spacing: 10px;"></div>

        </div>

    </div>

</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the smallContainer element
        var smallContainer = document.getElementById('smallContainer');

        // Get its height
        var smallContainerHeight = smallContainer.offsetHeight;

        // Set the same height to the bigContainer element
        var bigContainer = document.getElementById('bigContainer');
        bigContainer.style.height = smallContainerHeight + 'px';

    });




    document.addEventListener("DOMContentLoaded", function() {

        // Get the smallContainer element
        var smallContainer = document.getElementById('smallContainer');
        // Get the screenWidth
        // var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        var screenWidth = (window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth) / 2;
        // Get the scrollLeftButton and scrollRightButton elements
        var scrollLeftButton = document.getElementById('scrollLeftButton');
        var scrollRightButton = document.getElementById('scrollRightButton');

        // Function to smoothly scroll to the left by the width of the screen
        function scrollLeft() {
            var scrollAmount = screenWidth;
            var currentScrollLeft = smallContainer.scrollLeft;
            var targetScrollLeft = Math.max(0, currentScrollLeft - scrollAmount);
            smallContainer.scrollTo({
                left: targetScrollLeft,
                behavior: 'smooth'
            });
        }

        // Function to smoothly scroll to the right by the width of the screen
        function scrollRight() {
            var scrollAmount = screenWidth;
            var currentScrollLeft = smallContainer.scrollLeft;
            var targetScrollLeft = Math.min(smallContainer.scrollWidth - smallContainer.clientWidth, currentScrollLeft + scrollAmount);
            smallContainer.scrollTo({
                left: targetScrollLeft,
                behavior: 'smooth'
            });
        }

        // Add event listeners to the buttons
        scrollLeftButton.addEventListener('click', function() {
            scrollLeft();
        });

        scrollRightButton.addEventListener('click', function() {
            scrollRight();
        });

        window.addEventListener('resize', function() {
            // Update screenWidth when the window is resized
            screenWidth = (window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth) / 2;
        });

        
    });


    // this part for making the smallContainer scroll by grabing ____________________

    document.addEventListener("DOMContentLoaded", function() {

        var myDiv = document.getElementById('smallContainer');

        // Flag to indicate if the mouse button is pressed
        var isMouseDown = false;

        // Variables to store the starting mouse position
        var startX = 0;
        var startY = 0;

        // Variables to store the starting scroll position
        var startScrollLeft = 0;
        var startScrollTop = 0;

        // Mouse down event listener
        myDiv.addEventListener('mousedown', function(event) {
            isMouseDown = true;
            startX = event.clientX;
            startY = event.clientY;
            startScrollLeft = myDiv.scrollLeft;
            startScrollTop = myDiv.scrollTop;

            // Change cursor style
            myDiv.style.cursor = 'grabbing';
        });

        // Mouse move event listener
        document.addEventListener('mousemove', function(event) {
            if (isMouseDown) {
                // Calculate the distance moved by the mouse
                var deltaX = event.clientX - startX;
                var deltaY = event.clientY - startY;

                // Set the new scroll position
                myDiv.scrollLeft = startScrollLeft - deltaX;
                myDiv.scrollTop = startScrollTop - deltaY;
            }
        });

        // Mouse up event listener
        document.addEventListener('mouseup', function() {
            isMouseDown = false;
            // Restore cursor style
            myDiv.style.cursor = 'grab';
        });
    });


    // ____________________________________________________________________________
</script>
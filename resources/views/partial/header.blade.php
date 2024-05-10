<header class="w-screen main-container bg-white flex flex-row justify-between h-[70px] fixed z-[1000]" style="box-shadow: 0px 20px 30px #00000012;">

    <div onclick="window.location.href='{{ Request::path() === '/' ? '#' : url('/') }}'" class="h-full flex flex-row items-center gap-[15px] cursor-pointer">

        <div class="logo">

            <svg id="Group_111" data-name="Group 111" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55" height="55" viewBox="0 0 71.454 72">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_85" data-name="Rectangle 85" width="71.454" height="72" fill="none" />
                    </clipPath>
                </defs>
                <g id="Group_110" data-name="Group 110" clip-path="url(#clip-path)">
                    <path id="Path_24" data-name="Path 24" d="M69.652,36.022s1.995.292,1.787,2.9c-.146,1.845-3.867,6.963-10.473,9.859a4.259,4.259,0,0,1-4.2-.146c-.41.335-5.844,7.452-10.8,7.492-2.9.023-3.687-3.156-3.519-3.826s-4.4,3.5-14.952,7.325C11.627,65.374,6.227,60.78,3.65,57.747-1.482,51.71-1.658,40.84,6.068,24.8c7.1-14.733,16.3-22.948,18.082-24.124.634-.418,1.727-1.3,2.736.025.839,1.1.119,1.6-.852,2.586C18.181,11.3,13.495,17.39,9.664,26.094,7.783,30.368.058,46.755,7.259,55.907c3.189,4.054,11.311,3.687,19.69,0s11.971-5.394,16.785-11.171c1.676-2.011,3.3.335,3.463,1.005s.035,1.631-1.061,5.139c1.79.259,4.3-2.042,6.535-3.8a53.285,53.285,0,0,0,5.159-5.063c1-.955,2.67-1.421,2.537,1.364-.094,1.956,2.973-.378,3.811-.881s5.544-4.358,5.474-6.479" transform="translate(0 0)" fill="#231f20" />
                    <path id="Path_25" data-name="Path 25" d="M149.765,66.909a4.164,4.164,0,1,1-4.164-4.164,4.164,4.164,0,0,1,4.164,4.164" transform="translate(-94.036 -41.716)" fill="#333" />
                    <path id="Path_26" data-name="Path 26" d="M189.67,59a4.164,4.164,0,1,1-4.164-4.164A4.164,4.164,0,0,1,189.67,59" transform="translate(-120.567 -36.461)" fill="#333" />
                    <path id="Path_27" data-name="Path 27" d="M170.47,34.2a4.164,4.164,0,1,1-4.164-4.164A4.164,4.164,0,0,1,170.47,34.2" transform="translate(-107.801 -19.972)" fill="#333" />
                </g>
            </svg>

        </div>
        <div class="flex flex-col">
            <p class="font-extrabold header-logo">CHARLES</p>
            <p class="font-extrabold header-logo">SALIBA</p>
        </div>

    </div>

    <div class="main-header flex flex-row gap-[30px] h-full items-center py-[15px]">

        <a onclick="navigateAndScroll('mySite', 70)" class="font font-medium header-font cursor-pointer">Welcome to My Site</a>
        <a onclick="navigateAndScroll('authorship', 70)" class="font font-medium header-font cursor-pointer">Authorship</a>
        <a onclick="navigateAndScroll('media', 70)" class="font font-medium header-font cursor-pointer">Media</a>
        <a onclick="navigateAndScroll('books', 70)" class="font font-medium header-font cursor-pointer">Books</a>
        <a onclick="navigateAndScroll('myJourney', 70)" class="font font-medium header-font cursor-pointer">My Journey</a>
        <a onclick="redirectToCharles('resume', 70)" class="font font-medium header-font cursor-pointer">Resume</a>
        <button onclick="scrollToDivWithOffset('contactUs', 0)" class="font font-medium hovered" type="submit">Book a Consultation</button>

        <div class="hidden button-header">
            <svg style=" transform: rotate(180deg);" id="my-svg" class="" width="40px" height="40px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="icon" fill="black" transform="translate(42.666667, 106.666667)">
                        <path d="M3.55271368e-14,85.3333333 L106.666667,85.3333333 L106.666667,128 L3.55271368e-14,128 L3.55271368e-14,85.3333333 Z M3.55271368e-14,4.26325641e-14 L106.666667,4.26325641e-14 L106.666667,42.6666667 L3.55271368e-14,42.6666667 L3.55271368e-14,4.26325641e-14 Z M3.55271368e-14,170.666667 L106.666667,170.666667 L106.666667,213.333333 L3.55271368e-14,213.333333 L3.55271368e-14,170.666667 Z M3.55271368e-14,256 L106.666667,256 L106.666667,298.666667 L3.55271368e-14,298.666667 L3.55271368e-14,256 Z M149.333333,85.3333333 L426.666667,85.3333333 L426.666667,128 L149.333333,128 L149.333333,85.3333333 Z M149.333333,4.26325641e-14 L426.666667,4.26325641e-14 L426.666667,42.6666667 L149.333333,42.6666667 L149.333333,4.26325641e-14 Z M149.333333,170.666667 L426.666667,170.666667 L426.666667,213.333333 L149.333333,213.333333 L149.333333,170.666667 Z M149.333333,256 L426.666667,256 L426.666667,298.666667 L149.333333,298.666667 L149.333333,256 Z" id="Combined-Shape">
                        </path>
                    </g>
                </g>
            </svg>
        </div>

    </div>
</header>

<div class="phone-header hidden w-screen fixed top-[70px] left-[0%] z-[1050] h-[fit-content] bg-white flex-col justify-center items-center gap-[20px] container-padding pt-[25px] pb-[25px]" style="transition: opacity 0.4s ease;">
    <div class="div-seacond cursor-pointer">
        <a onclick=" navigateAndScroll('mySite', 70) ; closePhoneHeader();" class="font font-medium header-font">Welcome to My Site</a>
    </div>
    <div class="div-seacond cursor-pointer">
        <a onclick=" navigateAndScroll('authorship', 70) ; closePhoneHeader();" class="font font-medium header-font">Authorship</a>
    </div>
    <div class="div-seacond cursor-pointer">
        <a onclick=" navigateAndScroll('media', 70) ; closePhoneHeader();" class="font font-medium header-font">Media</a>
    </div>
    <div class="div-seacond cursor-pointer">
        <a onclick=" navigateAndScroll('books', 70) ; closePhoneHeader();" class="font font-medium header-font">Books</a>
    </div>
    <div class="div-seacond cursor-pointer">
        <a onclick=" navigateAndScroll('myJourney', 70) ; closePhoneHeader();" class="font font-medium header-font">My Journey</a>
    </div>
    <div class="div-seacond cursor-pointer">
        <a onclick=" redirectToCharles('resume', 70) ; closePhoneHeader();" class="font font-medium header-font">Resume</a>
    </div>
    <button onclick=" scrollToDivWithOffset('contactUs', 0) ; closePhoneHeader();" class="font font-medium hovered" type="submit">
        Book a Consultation
    </button>
</div>





<div id="heightDiv" class="w-screen">

</div>

<script>
    var header = document.querySelector('header');
    var heightDiv = document.getElementById('heightDiv');
    var headerHeight = header.clientHeight;
    heightDiv.style.height = headerHeight + 'px';


    function scrollToDivWithOffset(id, offset) {
        var target = document.getElementById(id);
        if (target) {
            var targetOffset = target.offsetTop - offset;
            window.scrollTo({
                top: targetOffset,
                behavior: 'smooth'
            });
        }
    }

    function navigateAndScroll(targetId, offset) {
        // Check if the current location is the homepage
        if ("{{ Request::path() }}" === '/') {
            // If it is, directly trigger the scrollToDivWithOffset function
            scrollToDivWithOffset(targetId, offset);
        } else {
            // If not, navigate to the homepage and then trigger the scrollToDivWithOffset function after the page has fully loaded

            // Navigate to the homepage with targetId and offset as URL parameters
            window.location.href = `{{ url('/') }}?targetId=${targetId}&offset=${offset}`;
        }
    }


    document.addEventListener('DOMContentLoaded', function() {
        // Read URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const targetId = urlParams.get('targetId');
        const offset = parseInt(urlParams.get('offset')) || 0;

        // Log the target ID and offset
        console.log("Target ID:", targetId);
        console.log("Offset:", offset);

        if (targetId) {
            scrollToDivWithOffset(targetId, offset);
        }
    });

    function redirectToCharles(targetId, offset) {
        if (window.location.pathname !== '/') {
            window.location.href = '/charles';
        } else if (window.location.pathname === '/') {
            scrollToDivWithOffset(targetId, offset);
        } else if (window.location.pathname === '/charles') {
            console.log('first')
        }
    }

    document.querySelector('.button-header').addEventListener('click', function() {
        var phoneHeader = document.querySelector('.phone-header');
        phoneHeader.classList.toggle('show-header');
    });

    function closePhoneHeader() {
        var phoneHeader = document.querySelector('.phone-header');
         phoneHeader.classList.toggle('show-header');


    }
</script>
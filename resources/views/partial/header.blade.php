<header class="w-screen main-container bg-white flex flex-row justify-between h-[70px] fixed z-[1000]" style="box-shadow: 0px 20px 30px #00000012;">
    <div class="h-full flex flex-row items-center gap-[15px]">

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
    <div class="flex flex-row gap-[30px] h-full items-center py-[15px]">

        <p class="font font-medium header-font ">Welcome to My Site</p>
        <p class="font font-medium header-font ">Authorship</p>
        <p class="font font-medium header-font ">Media</p>
        <p class="font font-medium header-font ">Books</p>
        <p class="font font-medium header-font ">My Journey</p>
        <p class="font font-medium header-font ">Resume</p>
        <button class="font font-medium header-font h-full text-white bg-[#135D66] w-[150px] hovered" type="submit">Book a Consultation</button>

    </div>
</header>

<div id="heightDiv" class="w-screen">

</div>

<script>
    var header = document.querySelector('header');
    var heightDiv = document.getElementById('heightDiv');
    var headerHeight = header.clientHeight;
    heightDiv.style.height = headerHeight + 'px';
</script>
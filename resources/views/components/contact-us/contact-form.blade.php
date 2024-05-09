<div x-data class="contact w-screen main-container bg-[transparent] pb-[30px] pt-[40px] gap-[80px] flex flex-row">

    <!-- @submit.prevent="$store.appData.submitted=true" onsubmit="event.preventDefault();" -->
    <form method="POST" action="" class="w-[60%] h-full flex flex-col gap-[20px]">
        @csrf

        <div class="flex flex-col gap-[15px]">
            <div class="flex flex-row gap-[30px]">
                <div class="w-[50%] flex flex-col gap-[5px]">
                    <label for="first_name" class="font-12px font font-normal">First Name</label>
                    <input placeholder="First Name" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="text" name="first_name" id="first_name" required>
                </div>
                <div class="w-[50%] flex flex-col gap-[5px]">
                    <label for="last_name" class="font-12px font font-normal">Last Name</label>
                    <input placeholder="Last Name" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="text" name="last_name" id="last_name" required>
                </div>
            </div>
            <div class="flex flex-row gap-[30px]">
                <div class="w-[50%] flex flex-col gap-[5px]">
                    <label for="email" class="font-12px font font-normal">Email Address</label>
                    <input placeholder="Email Address" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="email" name="email" id="email" required>
                </div>
                <div class="w-[50%] flex flex-col gap-[5px]">
                    <label for="phone" class="font-12px font font-normal">Phone Number</label>
                    <input placeholder="Phone Number" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="number" name="phone" id="phone" required>
                </div>
            </div>
            <div class="flex flex-row gap-[30px]">
                <div class="w-full flex flex-col gap-[5px]">
                    <label for="subject" class="font-12px font font-normal">Subject</label>
                    <input placeholder="Enter The Subject" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="text" name="subject" id="subject" required>
                </div>
            </div>
            <div class="flex flex-row gap-[30px]">
                <div class="w-full flex flex-col gap-[5px]">
                    <label for="message" class="font-12px font font-normal">Message</label>
                    <textarea placeholder="Enter your message here" class="text-[13px] h-[80px] border-[1px] border-collapse px-[10px]" name="message" id="message"></textarea>
                </div>
            </div>

        </div>
        <div>
            <button type="submit" class="hovered">Submit</button>
        </div>
    </form>







</div>

<!-- 
<div class="h-[400px]" x-data="{ isChecked: $store.isChecked || (localStorage.getItem('isChecked') === 'true' || false) }" x-init="() => { $watch('isChecked', value => { localStorage.setItem('isChecked', value); $store.isChecked = value; }) }">
    <div class="relative z-[2] bg-[#EDEDED]">
        <input type="checkbox" class="z-[3]" x-model="isChecked">
        <p x-text="isChecked ? 'Checked' : 'Unchecked'"></p>

        <div x-data="{ done : localStorage.getItem('done') || ''  || (localStorage.getItem('isChecked') === 'true' || false) }" x-init="() => { $watch('done', value => { localStorage.setItem('done', value); $store.isChecked = value; }) }">
            <button @click="done='new stuff'">click here</button>
            <p x-text="done"></p>
        </div>
    </div>

    <div class="relative z-[1] bg-[#EDEDED]">
        <div x-show="isChecked">hello there </div>
    </div>
</div> -->

<style>
    .contact {

        .hover-button {

            background-color: #7F2854;

            &:hover {

                background-color: #A7A9AC;

            }
        }
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector('form');
        const currentRoute = window.location.pathname;

        form.addEventListener('submit', function(e) {
            console.log("Form submitted successfully!");
            localStorage.setItem('isChecked', true);
            if (currentRoute === '/contact-us') {
                localStorage.setItem('done', "Thank You For Reaching Out!")
            } else if (currentRoute === '/connect') {

                localStorage.setItem('done', "Thank You For Your Request!")

            }
        });
    });
</script>


<!-- //___________________________________________________________________________ -->



<!--
 //___________________________________________________________________________ -->

<!-- <script>
</script> -->



<!-- <div x-data="{ isSubmitted: localStorage.getItem('isSubmitted') === 'true' || false }" x-init="() => { $watch('isSubmitted', value => localStorage.setItem('isSubmitted', value)) }">
    <form @submit.prevent="isSubmitted = true">
        <button type="submit">Submit</button>
    </form>
</div>


<div x-data="{ isSubmitted: localStorage.getItem('isSubmitted') === 'true' || false }">
    <div x-show="isSubmitted"  x-on:click="isSubmitted = false">
        Form has been submitted!
    </div>
</div> -->
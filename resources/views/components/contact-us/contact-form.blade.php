<div class="contact w-screen main-container bg-[transparent] pb-[30px] pt-[40px] gap-[80px] flex flex-row">

    <form method="POST" action="{{ route('contact.submit') }}" class="contact-form w-[60%] h-full flex flex-col gap-[20px]">
        @csrf

        <div class="w-full flex flex-col gap-[15px]">
            <div class="form-inputs flex flex-row gap-[30px] w-full">
                <div class="w-full flex flex-col gap-[5px]">
                    <label for="first_name" class="font-12px font font-normal">First Name</label>
                    <input placeholder="First Name" class="input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="text" name="first_name" id="first_name" required>
                </div>
                <div class="w-full flex flex-col gap-[5px]">
                    <label for="last_name" class="font-12px font font-normal">Last Name</label>
                    <input placeholder="Last Name" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="text" name="last_name" id="last_name" required>
                </div>
            </div>
            <div class="form-inputs flex flex-row gap-[30px] w-full">
                <div class="w-full flex flex-col gap-[5px]">
                    <label for="email" class="font-12px font font-normal">Email Address</label>
                    <input placeholder="Email Address" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="email" name="email" id="email" required>
                </div>
                <div class="w-full flex flex-col gap-[5px]">
                    <label for="phone" class="font-12px font font-normal">Phone Number</label>
                    <input placeholder="Phone Number" class="w-full input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="tel" name="phone" id="phone" pattern="[0-9+]*" title="Please enter a valid phone number" required oninput="this.value = this.value.replace(/[^0-9+]/g, '');">

                </div>
            </div>
            <div class="flex flex-row gap-[30px] w-full">
                <div class="w-full flex flex-col gap-[5px]">
                    <label for="subject" class="font-12px font font-normal">Subject</label>
                    <input placeholder="Enter The Subject" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="text" name="subject" id="subject" required>
                </div>
            </div>
            <div class="flex flex-row gap-[30px] w-full">
                <div class="w-full flex flex-col gap-[5px]">
                    <label for="message" class="font-12px font font-normal">Message</label>
                    <textarea placeholder="Enter your message here" class="text-[13px] h-[80px] border-[1px] border-collapse px-[10px] resize-none" name="message" id="message"></textarea>
                </div>
            </div>

        </div>
        <div>
            <button type="submit" class="hovered">Submit</button>
        </div>
    </form>



</div>


<script>
    // Initialize intlTelInput
    var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js",
        initialCountry: "auto",
        separateDialCode: true,
        placeholderNumberType: "MOBILE",
        geoIpLookup: function(callback) {
            // Replace this with your own implementation of GeoIP lookup if needed
            fetch('https://ipinfo.io/json?token=YOUR_TOKEN')
                .then(response => response.json())
                .then(data => {
                    var countryCode = (data && data.country) ? data.country : "";
                    callback(countryCode);
                })
                .catch(() => {
                    callback("US"); // Fallback to default country code
                });
        }
    });

    document.addEventListener('livewire:load', function() {
        Livewire.on('formSubmitted', function() {
            document.querySelector('.contact-form').reset();
            alert('Form submitted successfully!');
        });
    });
</script>

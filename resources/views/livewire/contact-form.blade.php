<form wire:submit.prevent="submitForm" class="contact-form w-[60%] h-full flex flex-col gap-[20px]">
    @csrf

    @if ($successMessage)
    <div class="alert alert-success">{{ $successMessage }}</div>
    @endif

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
                <input placeholder="Phone Number" class=" input-2 text-[13px] h-[35px] border-[1px] border-collapse px-[10px]" type="number" name="phone" id="phone" required>
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
                <textarea placeholder="Enter your message here" class="text-[13px] h-[80px] border-[1px] border-collapse px-[10px]" name="message" id="message"></textarea>
            </div>
        </div>

    </div>
    <div>
        <button type="submit" class="hovered">Submit</button>
    </div>


</form>
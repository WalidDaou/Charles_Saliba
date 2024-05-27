<div x-data="{ form: @entangle('form').defer }">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" x-model="form.name">
            @error('form.name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" x-model="form.email">
            @error('form.email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="message">Message:</label>
            <textarea id="message" x-model="form.message"></textarea>
            @error('form.message') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Submit</button>
    </form>

    <button @click="form = { name: '', email: '', message: '' }">Reset Form</button>
</div>

<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <section class="contact-section">
        <div class="contact-intro">
            <h2 class="contact-title">Get in Touch</h2>
            <p class="contact-description">
                Fill out the form below and we'll get back to you as soon as possible.
            </p>
        </div>

        <form wire:submit="create" class="contact-form">
            {{ $this->form }}

            <button class="form-submit" type="submit">Send Message</button>
        </form>

    </section>

    <x-filament-actions::modals />
</div>

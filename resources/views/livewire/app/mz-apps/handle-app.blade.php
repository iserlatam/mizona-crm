<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form wire:submit="create">
        {{ $this->form }}

        <button type="submit" style="border-radius: 12px; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
            Submit
        </button>
    </form>

    <x-filament-actions::modals />
</div>

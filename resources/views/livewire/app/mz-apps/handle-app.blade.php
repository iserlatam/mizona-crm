<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form class="flex flex-col gap-4" wire:submit="create">
        {{ $this->form }}

        <x-primary-button class="w-fit">
            Enviar
        </x-primary-button>
    </form>

    <x-filament-actions::modals />
</div>

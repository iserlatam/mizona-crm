<div class="p-4 bg-white rounded-lg shadow-md">

    @if($notification)
        <div class="bg-green-100 text-green-700 p-2 rounded-lg mb-4">
            {{ $notification }}
        </div>
    @endif

    <form wire:submit.prevent="send" class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium">Nombre</label>
            <input type="text" id="name" wire:model.defer="name" class="w-full px-4 py-2 border rounded-lg">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium">Correo electrónico</label>
            <input type="email" id="email" wire:model.defer="email" class="w-full px-4 py-2 border rounded-lg">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="message" class="block text-sm font-medium">Mensaje</label>
            <textarea id="message" wire:model.defer="message" class="w-full px-4 py-2 border rounded-lg"></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Enviar
        </button>
    </form>

    <!-- Modal de carga -->
    <div wire:loading class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-4 rounded-lg">Enviando...</div>
    </div>
</div>

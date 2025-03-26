<x-slot name="header">
    <x-custom.page-header
        title="Nuestras aplicaciones"
        type="h1"
        subtitle="Aqui iran todas nuestras aplicaciones registradas"
    />
</x-slot>

<x-custom.main-container>
    <div class="flex flex-col gap-4">
        <x-custom.page-header
            title="Acciones rapidas"
            type="h2"
        />

        <div class="flex w-2/3 gap-3">
            <x-primary-button>
                Registrar aplicacion
            </x-primary-button>
            <x-primary-button>
                Generar reportes
            </x-primary-button>
            <x-primary-button>
                Buscar aplicacion
            </x-primary-button>
            <x-primary-button>
                Ver clientes
            </x-primary-button>
        </div>

        <div class="flex flex-row justify-between items-center gap-10 w-full mt-4">
            <div class="px-6 py-12 border-2 border-indigo-300 rounded w-full">
                @livewire('app.mz-apps.handle-app')
            </div>
            <div class="px-6 py-12 border-2 border-indigo-300 rounded w-full">
                @livewire('app.guests.contact-form')
            </div>
        </div>
    </div>
</x-custom.main-container>

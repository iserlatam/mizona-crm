<div style="padding: 80px">
    <h1 style="font-size: 48px; color: #fff;">Aplicaciones registradas</h1>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div style="margin-block: 20px">
        {{ $this->table }}
    </div>

    <h1 style="font-size: 36px; color: #fff;">Controlar aplicacion</h1>
    <div style="margin-block: 20px">
        @livewire('app.mz-apps.handle-app')
    </div>
</div>

<?php

namespace App\Livewire\App\MzApps;

use App\Models\Aplicacion;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class HandleApp extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make('app_status')
                    ->required(),
                TextInput::make('descripcion')
                    ->required(),
                // ...
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $app = Aplicacion::findOrFail(2);

        $app->update([
            'app_status' => $data['app_status'],
            'descripcion' => $data['descripcion'],
            // ...
        ]);
    }

    public function render()
    {
        return view('livewire.app.mz-apps.handle-app');
    }
}

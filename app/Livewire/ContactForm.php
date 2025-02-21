<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components;
use Filament\Notifications\Notification;
use Livewire\Component;

class ContactForm extends Component implements HasForms
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
                Components\Grid::make()
                    ->columns(2)
                    ->schema([
                        Components\TextInput::make('email')
                            ->label('Email')
                            ->required(),
                        Components\TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->placeholder('John Doe'),
                        Components\Textarea::make('message')
                            ->label('Message')
                            ->columnSpanFull()
                            ->required(),
                    ])
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $data = $this->form->getState();
        Notification::make('Contact form submitted')
            ->send();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

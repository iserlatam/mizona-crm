<?php

namespace App\Livewire\App\MzApps;

// use App\Models\Aplicacion;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component implements HasForms
{
    use InteractsWithForms;

    // public function table(Table $table): Table
    // {
    //     return $table
    //         ->query(Aplicacion::query())
    //         ->columns([
    //             TextColumn::make('id'),
    //             TextColumn::make('app_key'),
    //             TextColumn::make('descripcion'),
    //             TextColumn::make('tipo'),
    //             TextColumn::make('precio')
    //                 ->money('COP'),
    //             TextColumn::make('app_status'),
    //         ])
    //         ->filters([
    //             // ...
    //         ])
    //         ->actions([
    //             // ...
    //         ])
    //         ->bulkActions([
    //             // ...
    //         ]);
    // }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.app.mz-apps.index');
    }
}

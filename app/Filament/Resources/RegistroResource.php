<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistroResource\Pages;
use App\Filament\Resources\RegistroResource\RelationManagers;
use App\Models\Registro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistroResource extends Resource
{
    protected static ?string $model = Registro::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('servicio')
                    ->required(),
                Forms\Components\TextInput::make('detalle')
                    ->required(),
                Forms\Components\TextInput::make('total_unitario')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('fecha_pago')
                    ->required(),
                Forms\Components\TextInput::make('metodo_pago')
                    ->required(),
                Forms\Components\Toggle::make('estado_pago')
                    ->required(),
                Forms\Components\Select::make('cliente_id')
                    ->relationship('cliente', 'nombre')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('servicio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detalle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_unitario')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_pago')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('metodo_pago')
                    ->searchable(),
                Tables\Columns\IconColumn::make('estado_pago')
                    ->boolean(),
                Tables\Columns\TextColumn::make('cliente.nombre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistros::route('/'),
            'create' => Pages\CreateRegistro::route('/create'),
            'edit' => Pages\EditRegistro::route('/{record}/edit'),
        ];
    }
}

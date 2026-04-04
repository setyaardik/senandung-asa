<?php

namespace App\Filament\Resources\Stats\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->label('Label')
                    ->required()
                    ->maxLength(255),

                TextInput::make('value')
                    ->label('Angka')
                    ->numeric()
                    ->required(),

                TextInput::make('suffix')
                    ->label('Suffix')
                    ->placeholder('Contoh: +')
                    ->maxLength(10),

                Select::make('theme')
                    ->label('Warna Card')
                    ->options([
                        'sky' => 'Sky',
                        'blue' => 'Blue',
                    ])
                    ->default('sky')
                    ->required(),

                TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->required(),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true)
                    ->required(),
            ])
            ->columns(2);
    }
}
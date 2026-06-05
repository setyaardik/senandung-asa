<?php

namespace App\Filament\Resources\Aspirations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AspirationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama/Inisial')
                    ->disabled(),

                TextInput::make('age')
                    ->label('Usia')
                    ->disabled(),

                TextInput::make('gender')
                    ->label('Jenis Kelamin')
                    ->disabled(),

                TextInput::make('region')
                    ->label('Asal Daerah')
                    ->disabled(),

                Textarea::make('message')
                    ->label('Aspirasi/Pengaduan')
                    ->rows(8)
                    ->disabled()
                    ->columnSpanFull(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'baru' => 'Baru',
                        'diproses' => 'Diproses',
                        'selesai' => 'Selesai',
                    ])
                    ->required(),
            ]);
    }
}
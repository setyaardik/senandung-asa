<?php

namespace App\Filament\Resources\ProgramItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProgramItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('short_title')
                    ->label('Label Kecil')
                    ->placeholder('Contoh: Semua itu Setara')
                    ->maxLength(255),

                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                TextInput::make('headline')
                    ->label('Headline Pendek')
                    ->placeholder('Contoh: Pendampingan Inklusif untuk Anak dan Caregivers')
                    ->maxLength(255)
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Foto Program')
                    ->image()
                    ->disk('public')
                    ->directory('programs')
                    ->visibility('public')
                    ->imageEditor()
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(10)
                    ->required()
                    ->columnSpanFull(),

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
<?php

namespace App\Filament\Resources\Aspirations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AspirationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nama/Inisial'),

                TextEntry::make('age')
                    ->label('Usia'),

                TextEntry::make('gender')
                    ->label('Jenis Kelamin'),

                TextEntry::make('region')
                    ->label('Asal Daerah'),

                TextEntry::make('status')
                    ->badge(),

                TextEntry::make('message')
                    ->label('Aspirasi')
                    ->columnSpanFull(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}

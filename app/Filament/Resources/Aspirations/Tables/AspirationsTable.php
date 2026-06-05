<?php

namespace App\Filament\Resources\Aspirations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class AspirationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama/Inisial')
                    ->searchable(),

                TextColumn::make('age')
                    ->label('Usia'),

                TextColumn::make('gender')
                    ->label('Jenis Kelamin'),

                TextColumn::make('region')
                    ->label('Asal Daerah')
                    ->searchable(),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'baru' => 'danger',
                        'diproses' => 'warning',
                        'selesai' => 'success',
                        default => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Dikirim')
                    ->since(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'baru' => 'Baru',
                        'diproses' => 'Diproses',
                        'selesai' => 'Selesai',
                    ]),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
<?php

namespace App\Filament\Resources\ProgramItems;

use App\Filament\Resources\ProgramItems\Pages\CreateProgramItem;
use App\Filament\Resources\ProgramItems\Pages\EditProgramItem;
use App\Filament\Resources\ProgramItems\Pages\ListProgramItems;
use App\Filament\Resources\ProgramItems\Schemas\ProgramItemForm;
use App\Filament\Resources\ProgramItems\Tables\ProgramItemsTable;
use App\Models\ProgramItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ProgramItemResource extends Resource
{
    protected static ?string $model = ProgramItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Konten Website';

    protected static ?string $navigationLabel = 'Ruang Program';
    protected static ?string $modelLabel = 'Program';
    protected static ?string $pluralModelLabel = 'Ruang Program';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ProgramItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProgramItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProgramItems::route('/'),
            'create' => CreateProgramItem::route('/create'),
            'edit' => EditProgramItem::route('/{record}/edit'),
        ];
    }
}
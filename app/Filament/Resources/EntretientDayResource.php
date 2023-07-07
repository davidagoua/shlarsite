<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntretientDayResource\Pages;
use App\Filament\Resources\EntretientDayResource\RelationManagers;
use App\Models\EntretientDay;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntretientDayResource extends Resource
{
    protected static ?string $model = EntretientDay::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('label'),
                Forms\Components\TextInput::make('quantity')->numeric()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('label'),
                Tables\Columns\TextColumn::make('quantity'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEntretientDays::route('/'),
            'create' => Pages\CreateEntretientDay::route('/create'),
            'edit' => Pages\EditEntretientDay::route('/{record}/edit'),
        ];
    }
}

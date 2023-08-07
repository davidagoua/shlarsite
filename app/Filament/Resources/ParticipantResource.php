<?php

namespace App\Filament\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Filament\Resources\ParticipantResource\Pages;
use App\Filament\Resources\ParticipantResource\RelationManagers;
use App\Models\Participant;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParticipantResource extends Resource
{
    protected static ?string $model = Participant::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('contact'),
                Tables\Columns\ImageColumn::make('cni'),
                Tables\Columns\TextColumn::make('date_naissance'),
                Tables\Columns\TextColumn::make('commune'),
                Tables\Columns\TextColumn::make('age')->getStateUsing(function($record){
                    return (new Carbon($record->date_naissance))->diff(now())->y . ' ans';
                }),
                Tables\Columns\TextColumn::make('nom')->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('prenoms')->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('jour_entretient.label'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('pdf')
                    ->url(function($record){
                        return "https://sacerdoce-des-heritiers.com/pdfview/". $record->id;
                    })
                    ->openUrlInNewTab()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                FilamentExportBulkAction::make('export')
                    ->timeFormat('m y d')
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
            'index' => Pages\ListParticipants::route('/'),
            'create' => Pages\CreateParticipant::route('/create'),
            'edit' => Pages\EditParticipant::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssembleiaResource\Pages;
use App\Filament\Resources\AssembleiaResource\RelationManagers;
use App\Models\Assembleia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AssembleiaResource extends Resource
{
    protected static ?string $model = Assembleia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Configuração';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ata_convocacao')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('dia_assembleia')
                    ->required(),
                Forms\Components\Textarea::make('observacao')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_assembleia')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ata_convocacao')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dia_assembleia')
                    ->date('d/m/Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:i:s')
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
            'index' => Pages\ListAssembleias::route('/'),
            'create' => Pages\CreateAssembleia::route('/create'),
            'edit' => Pages\EditAssembleia::route('/{record}/edit'),
        ];
    }
}

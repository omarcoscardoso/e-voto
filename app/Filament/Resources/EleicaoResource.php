<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EleicaoResource\Pages;
use App\Filament\Resources\EleicaoResource\RelationManagers;
use App\Models\Eleicao;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EleicaoResource extends Resource
{
    protected static ?string $model = Eleicao::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Eleição';
    protected static ?string $pluralModelLabel = 'Eleições';
    protected static ?string $navigationGroup = 'Configuração';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome_oficio')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('qt_vagas')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('id_assembleia')
                    ->required()
                    ->relationship(name: 'assembleia', titleAttribute: 'nome')
                    ->searchable()
                    ->preload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_eleicao')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nome_oficio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('qt_vagas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('assembleia.nome')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageEleicaos::route('/'),
        ];
    }
}

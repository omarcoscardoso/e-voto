<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EleitorResource\Pages;
use App\Filament\Resources\EleitorResource\RelationManagers;
use App\Models\Eleitor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EleitorResource extends Resource
{
    protected static ?string $model = Eleitor::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $modelLabel = 'Eleitor';
    protected static ?string $pluralModelLabel = 'Eleitores';
    // protected static ?string $navigationGroup = 'Configuração';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome_eleitor')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Radio::make('sexo')
                    ->required()
                    ->options([
                        'Masculino' => 'Masculino',
                        'Feminino' => 'Feminino',
                    ])
                    ->inline()
                    ->inlineLabel(false),
                Forms\Components\DatePicker::make('nascimento')
                    ->required(),
                Forms\Components\DatePicker::make('admissao')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome_eleitor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sexo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nascimento')
                    ->date('d/m/Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('admissao')
                    ->date('d/m/Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListEleitors::route('/'),
            'create' => Pages\CreateEleitor::route('/create'),
            'edit' => Pages\EditEleitor::route('/{record}/edit'),
        ];
    }
}

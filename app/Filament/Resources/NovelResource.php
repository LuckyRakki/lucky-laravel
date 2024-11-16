<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NovelResource\Pages;
use App\Filament\Resources\NovelResource\RelationManagers;
use App\Models\Novel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NovelResource extends Resource
{
    protected static ?string $model = Novel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_novel'),
                Forms\Components\TextInput::make('negara'),
                Forms\Components\Select::make('genre_id')
                ->relationship('genre', 'name')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_novel')->sortable(),
                Tables\Columns\TextColumn::make('negara')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('genre.name')->searchable()->sortable()
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('genre_id')
                    ->relationship('genre', 'name')
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
            'index' => Pages\ListNovels::route('/'),
            'create' => Pages\CreateNovel::route('/create'),
            'edit' => Pages\EditNovel::route('/{record}/edit'),
        ];
    }
}

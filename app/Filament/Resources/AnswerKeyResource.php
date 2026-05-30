<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnswerKeyResource\Pages;
use App\Filament\Resources\AnswerKeyResource\RelationManagers;
use App\Models\AnswerKey;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;

class AnswerKeyResource extends Resource
{
    protected static ?string $model = AnswerKey::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    // In FacultyResource.php and UpcomingBatchResource.php
    public static function getNavigationGroup(): ?string
    {
        return '🎓 Academic Panel';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->label('Answer Key Title'),

                FileUpload::make('file_path')
                    ->label('Upload Answer Key PDF')
                    ->disk('public')
                    ->directory('answer_keys')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(2048) // Size in KB (2048 KB = 2 MB)
                    ->required(),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAnswerKeys::route('/'),
            'create' => Pages\CreateAnswerKey::route('/create'),
            'edit' => Pages\EditAnswerKey::route('/{record}/edit'),
        ];
    }
}

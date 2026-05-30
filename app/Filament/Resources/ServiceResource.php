<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Services;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ServiceResource extends Resource
{
    protected static ?string $model = Services::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function getNavigationGroup(): ?string
    {
        return '🖥️ Website Builder';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Service Title')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(), // full width

            Grid::make(2)->schema([
                Textarea::make('description')
                    ->label('Service Description')
                    ->required()
                    ->rows(6),

                FileUpload::make('image')
                    ->label('Service Image')
                    ->imageEditor()
                    ->image()
                    ->directory('courses')
                    ->imagePreviewHeight('100')
                    ->required(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
         return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Service Image')
                    ->circular()
                    ->height(60)
                    ->width(60),

                TextColumn::make('title')
                    ->label('Service Title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Service Description')
                    ->wrap(), // allows multiline
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->tooltip('View')
                    ->icon('heroicon-o-eye'),

                Tables\Actions\EditAction::make()
                    ->tooltip('Edit')
                    ->icon('heroicon-o-pencil'),

                Tables\Actions\DeleteAction::make()
                    ->tooltip('Delete')
                    ->icon('heroicon-o-trash'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}

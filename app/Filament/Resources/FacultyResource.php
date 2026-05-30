<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacultyResource\Pages;
use App\Filament\Resources\FacultyResource\RelationManagers;
use App\Models\Faculty;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FacultyResource extends Resource
{
    protected static ?string $model = Faculty::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    // In FacultyResource.php and UpcomingBatchResource.php
    public static function getNavigationGroup(): ?string
    {
        return '🎓 Academic Panel';
    }


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('faculty_image')
                    ->image()
                    ->imageEditor()
                    ->directory('faculties')
                    ->maxSize(2048)
                    ->required(),
                Forms\Components\TextInput::make('faculty_name')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('faculty_experience')
                    ->label('Experience (e.g. 5 years)')
                    ->required()
                    ->maxLength(50),
                Forms\Components\Textarea::make('faculty_description')
                    ->label('Bio / Description')
                    ->maxLength(1000),
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }


    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('faculty_image')
                    ->label('Photo')
                    ->circular(),

                Tables\Columns\TextColumn::make('faculty_name')
                    ->searchable()
                    ->sortable()
                    ->label('Faculty Name'),

                Tables\Columns\TextColumn::make('faculty_experience')
                    ->label('Experience')
                    ->sortable(),

                Tables\Columns\TextColumn::make('faculty_description')
                    ->label('Description')
                    ->limit(50)
                    ->wrap(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(), // Optional View action
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('toggleActive')
                    ->label(fn ($record) => $record->is_active ? 'Deactivate' : 'Activate')
                    ->action(fn ($record) => $record->update(['is_active' => !$record->is_active]))
                    ->icon(fn ($record) => $record->is_active ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                    ->color(fn ($record) => $record->is_active ? 'danger' : 'success'),
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
            'index' => Pages\ListFaculties::route('/'),
            'create' => Pages\CreateFaculty::route('/create'),
            'edit' => Pages\EditFaculty::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopperStudentResource\Pages;
use App\Filament\Resources\TopperStudentResource\RelationManagers;
use App\Models\TopperStudent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TopperStudentResource extends Resource
{
    protected static ?string $model = TopperStudent::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function getNavigationGroup(): ?string
    {
        return '📝 Content Management';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(100),

                Forms\Components\TextInput::make('course_name')
                    ->required()
                    ->maxLength(100)
                    ->label('Course Name'),

                Forms\Components\FileUpload::make('photo')
                    ->label('Photo')
                    ->directory('topper-students')
                    ->imageEditor()
                    ->image()
                    ->imagePreviewHeight('100')
                    ->required(),

                Forms\Components\Textarea::make('testimonial')
                    ->label('Testimonial')
                    ->required()
                    ->maxLength(255)
                    ->rows(4),

                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')->label('Photo')->circular(),

                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),

                Tables\Columns\TextColumn::make('course_name')
                    ->label('Course')
                    ->sortable(),

                Tables\Columns\TextColumn::make('testimonial')->wrap(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('toggleActive')
                    ->label(fn ($record) => $record->is_active ? 'Deactivate' : 'Activate')
                    ->icon(fn ($record) => $record->is_active ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                    ->color(fn ($record) => $record->is_active ? 'danger' : 'success')
                    ->action(fn ($record) => $record->update(['is_active' => !$record->is_active])),
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
            'index' => Pages\ListTopperStudents::route('/'),
            'create' => Pages\CreateTopperStudent::route('/create'),
            'edit' => Pages\EditTopperStudent::route('/{record}/edit'),
        ];
    }
}

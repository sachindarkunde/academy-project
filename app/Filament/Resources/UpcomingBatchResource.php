<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UpcomingBatchResource\Pages;
use App\Filament\Resources\UpcomingBatchResource\RelationManagers;
use App\Models\UpcomingBatch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UpcomingBatchResource extends Resource
{
    protected static ?string $model = UpcomingBatch::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    
    protected static ?string $label = 'Upcoming Batch';
    protected static ?string $pluralLabel = 'Upcoming Batches';

    // In FacultyResource.php and UpcomingBatchResource.php
    public static function getNavigationGroup(): ?string
    {
        return '🎓 Academic Panel';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('batch_name')
                    ->placeholder('Enter Batch Name Here')
                    ->required()
                    ->maxLength(100),

                Forms\Components\TextInput::make('batch_duration')
                    ->placeholder('e.g. 3 Months')
                    ->maxLength(50)
                    ->required(),

                Forms\Components\DatePicker::make('batch_launch_date')
                    ->required(),

                Forms\Components\TextInput::make('batch_timing')
                    ->placeholder('e.g. 7:00 AM to 9:00 AM')
                    ->maxLength(50)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
       return $table
            ->columns([
                Tables\Columns\TextColumn::make('batch_name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('batch_duration')
                    ->sortable(),

                Tables\Columns\TextColumn::make('batch_launch_date')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('batch_timing')
                    ->sortable(),
            ])
            ->filters([
                // Add any filters here if needed
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),       // View button
                Tables\Actions\EditAction::make(),       // Edit button
                Tables\Actions\DeleteAction::make(),     // Delete button
                Tables\Actions\ForceDeleteAction::make(),// Force delete (if soft deletes enabled)
                Tables\Actions\RestoreAction::make(),    // Restore (if soft deletes enabled)
                Tables\Actions\ReplicateAction::make(),  // Duplicate row
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListUpcomingBatches::route('/'),
            'create' => Pages\CreateUpcomingBatch::route('/create'),
            'edit' => Pages\EditUpcomingBatch::route('/{record}/edit'),
        ];
    }
}

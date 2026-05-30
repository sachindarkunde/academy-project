<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnquiryResource\Pages;
use App\Filament\Resources\EnquiryResource\RelationManagers;
use App\Models\Enquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class EnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
    
    // In FacultyResource.php and UpcomingBatchResource.php
    public static function getNavigationGroup(): ?string
    {
        return '🎓 Academic Panel';
    }

    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             //
    //         ]);
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('service')
                    ->label('Service Title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('message')
                    ->label('Description')
                    ->wrap(),

                TextColumn::make('mobile')
                    ->label('Mobile No'),

                TextColumn::make('email')
                    ->label('Email'),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                // Add any filters if you want
            ])
            ->actions([])
            ->bulkActions([]);
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
            'index' => Pages\ListEnquiries::route('/'),
            // 'create' => Pages\CreateEnquiry::route('/create'),
            // 'edit' => Pages\EditEnquiry::route('/{record}/edit'),
        ];
    }
}

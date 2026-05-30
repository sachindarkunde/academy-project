<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSectionResource\Pages;
use App\Filament\Resources\HeroSectionResource\RelationManagers;
use App\Models\HeroSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroSectionResource extends Resource
{
    protected static ?string $model = HeroSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Hero Section';
    protected static ?string $modelLabel = 'Hero Section';

    // In BlogResource.php, HeroSectionResource.php, TestimonialsResource.php etc.
    public static function getNavigationGroup(): ?string
    {
        return '🖥️ Website Builder';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('heading')->required()->maxLength(255),
                Forms\Components\TextInput::make('subheading')->required()->maxLength(255),
                Forms\Components\TextInput::make('button_text')->required()->maxLength(100),
                Forms\Components\TextInput::make('button_url')->required()->url(),
                Forms\Components\FileUpload::make('image')->image()->directory('hero')->required()->imageEditor(),
                Forms\Components\Toggle::make('is_active')
                    ->label('Is Active')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            // Set all other HeroSections to inactive
                            HeroSection::where('is_active', true)->update(['is_active' => false]);
                        }
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->circular(),
                Tables\Columns\TextColumn::make('heading')->searchable()->wrap(),
                Tables\Columns\TextColumn::make('subheading')->wrap(),
                Tables\Columns\TextColumn::make('button_text'),
                Tables\Columns\TextColumn::make('button_url'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
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
            'index' => Pages\ListHeroSections::route('/'),
            'create' => Pages\CreateHeroSection::route('/create'),
            'edit' => Pages\EditHeroSection::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Forms\Components\Grid;

use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ReplicateAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\ForceDeleteAction;


class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    
    // In BlogResource.php, HeroSectionResource.php, TestimonialsResource.php etc.
    public static function getNavigationGroup(): ?string
    {
        return '📝 Content Management';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([
                    TextInput::make('title')
                        ->label('Blog Title')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('author')
                        ->label('Author Name')
                        ->default('Admin'),

                    FileUpload::make('image')
                        ->label('Blog Image')
                        ->imageEditor()
                        ->required()
                        ->image()
                        ->directory('blog-images')
                        ->disk('public')
                        ->visibility('public')
                        ->maxSize(1024),

                    DateTimePicker::make('published_at')
                        ->label('Publish Date & Time')
                        ->label('Publish Date')
                        ->required(),

                    Textarea::make('content')
                        ->label('Blog Content')
                        ->required()
                        ->rows(8)
                        ->columnSpan(2)
                        ->maxLength(500), // only take half grid if grid is 2-column
                ])
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->circular()->label('Blog Image'),
                TextColumn::make('title')->searchable()->sortable()->label('Blog Title')->wrap(),
                TextColumn::make('author')->sortable(),
                TextColumn::make('published_at')->label('Published at')->dateTime('F j, Y h:i A'),
                TextColumn::make('content')->wrap()->label('Blog Content'),
                // TextColumn::make('')->label('actions')->alignCenter(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
                // ReplicateAction::make(),
                RestoreAction::make(), // works only if SoftDeletes is used
                ForceDeleteAction::make(), // works only if SoftDeletes is used
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(), // only if SoftDeletes
                    Tables\Actions\ForceDeleteBulkAction::make(), // only if SoftDeletes
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}

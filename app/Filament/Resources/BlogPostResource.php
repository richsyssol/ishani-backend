<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Filament\Resources\BlogPostResource\RelationManagers;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogPostResource extends Resource

{   protected static ?string $model = BlogPost::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('slug')->required(),
                Forms\Components\Textarea::make('excerpt')->required(),
                Forms\Components\RichEditor::make('content')->required(),
                Forms\Components\Select::make('category')
                ->options([
                    // Product Categories
                    'uPVC French Doors' => 'uPVC French Doors',
                    'Aluminum French Doors' => 'Aluminum French Doors',
                    'Sliding & Folding Doors' => 'Sliding & Folding Doors',
                    'Smart Safety Doors' => 'Smart Safety Doors',
                    'French Windows' => 'French Windows',
                    'Partitions' => 'Partitions',
                    'Mosquito Nets' => 'Mosquito Nets',
                    'Invisible Grills' => 'Invisible Grills',
                    
                    // General Content
                    'Design Tips' => 'Design Tips',
                    'Installation Guides' => 'Installation Guides',
                    'Maintenance' => 'Maintenance',
                    'Material Comparisons' => 'Material Comparisons',
                    'Energy Efficiency' => 'Energy Efficiency',
                    'Home Security' => 'Home Security',
                    'Ventilation Solutions' => 'Ventilation Solutions',
                    'Latest Trends' => 'Latest Trends',
                    
                    // Use Cases
                    'Residential Projects' => 'Residential Projects',
                    'Commercial Spaces' => 'Commercial Spaces',
                    'Renovation Ideas' => 'Renovation Ideas',
                    'Small Space Solutions' => 'Small Space Solutions',
                    'Luxury Applications' => 'Luxury Applications',
                ])
                ->required()
                ->searchable()
                ->columnSpanFull(),
                Forms\Components\FileUpload::make('image_url')
                    ->label('Featured Image')
                    ->image()
                    ->directory('blog')
                    ->preserveFilenames()
                    ->required(),
                Forms\Components\DatePicker::make('published_date')->required(),
                Forms\Components\TextInput::make('author_name')->required(),
                Forms\Components\FileUpload::make('author_avatar')
                    ->label('Author Avatar')
                    ->image()
                    ->directory('authors')
                    ->preserveFilenames()
                    ->required(),
                Forms\Components\TextInput::make('author_role')->required(),
                Forms\Components\Repeater::make('related_products')
                    ->schema([
                        Forms\Components\TextInput::make('id'),
                        Forms\Components\TextInput::make('name'),
                        Forms\Components\TextInput::make('link'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')->label('Image'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('published_date')->date(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'Design Tips' => 'Design Tips',
                        'Door Maintenance' => 'Door Maintenance',
                        'Industry Trends' => 'Industry Trends'
                    ])
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
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}

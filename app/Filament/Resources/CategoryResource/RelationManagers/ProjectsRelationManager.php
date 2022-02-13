<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class ProjectsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'projects';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),

                Forms\Components\BelongsToSelect::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'title'),

                Forms\Components\FileUpload::make('featured_image')
                    ->image()
                    ->required(),

                Forms\Components\MarkdownEditor::make('content')
                    ->required(),

                Forms\Components\TextInput::make('live_url')
                    ->url(),

                Forms\Components\TextInput::make('github_url')
                    ->url()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
            ])
            ->filters([
                //
            ]);
    }
}

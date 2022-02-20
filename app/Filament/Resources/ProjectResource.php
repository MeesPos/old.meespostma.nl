<?php

namespace App\Filament\Resources;

use Closure;
use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    use Translatable;

    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';

    protected static ?string $recordTitleAttribute = 'title';

    public static function getTranslatableLocales()
    {
        return ['en', 'nl'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    }),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(),

                Forms\Components\BelongsToSelect::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'title'),

                Forms\Components\FileUpload::make('featured_image')
                    ->image()
                    ->required(),

                Forms\Components\RichEditor::make('content')
                    ->required(),

                Forms\Components\Textarea::make('excerpt')
                    ->required()
                    ->maxLength(140),

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
                Tables\Columns\TextColumn::make('title'),

                Tables\Columns\TextColumn::make('slug')
            ])
            ->filters([
                //
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}

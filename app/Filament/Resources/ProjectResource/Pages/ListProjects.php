<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Resources\Pages\ListRecords;

class ListProjects extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ProjectResource::class;
}

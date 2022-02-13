<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ProjectResource::class;
}

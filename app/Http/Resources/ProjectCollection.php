<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectCollection extends ResourceCollection
{
    public $collects = ProjectResource::class;

    protected function collectResource($resource)
    {
        $resource = parent::collectResource($resource);

        $this->collection = $this->collection->sortBy('created_at');

        return $resource;
    }
}

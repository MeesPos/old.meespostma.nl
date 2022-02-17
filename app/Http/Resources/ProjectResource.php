<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category' => $this->category_id,
            'featured_image' => Storage::disk('public')->url($this->featured_image),
            'title' => $this->title,
            'content' => $this->content,
            'live_url' => $this->live_url,
            'github_url' => $this->github_url,
            'created_at' => Carbon::parse($this->created_at)->format('d-m-Y H:i')
        ];
    }
}

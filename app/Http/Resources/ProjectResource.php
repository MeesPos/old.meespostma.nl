<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectResource extends JsonResource
{
    public static $wrap = null;

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
            'category' => CategoryResource::make($this->category),
            'slug' => $this->slug,
            'featured_image' => Storage::disk('public')->url($this->featured_image),
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'live_url' => $this->live_url,
            'github_url' => $this->github_url,
            'created_at' => Carbon::parse($this->created_at)->format('d-m-Y H:i')
        ];
    }
}

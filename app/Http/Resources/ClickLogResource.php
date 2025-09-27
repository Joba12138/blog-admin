<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

/**
 * @mixin \App\Models\Blog\ClickLog
 */
class ClickLogResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'url' => $this->open_url,
            'created_at' => $this->created_at->toDateTimeString(),
        ];
    }
}

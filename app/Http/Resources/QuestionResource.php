<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'path' => ("/question/$this->slug"),
            'user'  => $this->user['name'],
            'created_at'  => $this->created_at->diffForHumans(),
            'body' => substr($this->body,0,255)
        ];
    }
}

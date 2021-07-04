<?php

namespace App\Http\Resources\ChannelList;

use Illuminate\Http\Resources\Json\JsonResource;

class ChannelListResource extends JsonResource
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
                'unique_identifier' => $this['id'],
                'channel_name' => $this['channel_name'],
                'channel_icon' => $this['channel_icon'],
        ];
    }
}

<?php

namespace App\Http\Resources\Programme;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
use App\Helpers\Help;

class ProgrammeDetailResource extends JsonResource
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
                'programme_name' => $this['programme']['programme_name'],
                'programme_description' => $this['programme_description'],
                'programme_thumbnail' => $this['programme_thumbnail'],
                'start_time' => $this['programme']['start_time'],
                'end_time' => $this['programme']['end_time'],
                'duration' => Help::convertDateTimeToSeconds($this['programme']['duration']),
                'channel' => $this['programme']['channel']['channel_name'],
        ];
    }
}

<?php

namespace App\Http\Resources\Programme;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
use App\Helpers\Help;

class ProgrammeTimetableResource extends JsonResource
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
                'programme_name' => $this['programme_name'],
                'start_time' => $this['start_time'],
                'end_time' => $this['end_time'],
                'duration' => Help::convertDateTimeToSeconds($this['duration']),
        ];
    }
}

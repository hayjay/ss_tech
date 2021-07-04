<?php
namespace App\Repositories\Programme;

use App\Interfaces\Programme\ProgrammeRepositoryInterface;
use App\Models\{Programme, ProgrammeDetail};

class ProgrammeRepository implements ProgrammeRepositoryInterface
{
    private $programme;
    private $programme_details;

    public function __construct(Programme $programme, ProgrammeDetail $programme_details) {
        $this->programme = $programme;
        $this->programme_details = $programme_details;
    }

    public function all()
    {
    	$programmes = $this->programme->all();
        return $programmes;
    }

    public function getProgrammeByChannelData($data) {
        $date = explode(' ', $data[1]);
        $date = count($date) > 1 ? $data[1] : $date[0];
        return $this->programme->where([
            'channel_id' => $data[0],
            'created_at' => $date,
            'timezone' => $data[2],
        ])->get();
    }

    public function getProgrammeInformation($data) {
        return $this->programme_details->where('programme_id', $data[1])
                                    ->with(['programme' => function($programme){
                                        $programme->where('channel_id', 1)->with('channel')->first();
                                    }])
                                    ->get();
    }
}

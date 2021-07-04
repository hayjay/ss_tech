<?php

namespace App\Http\Controllers;

use App\Interfaces\Programme\ProgrammeRepositoryInterface;
use App\Http\Resources\Programme\{ProgrammeTimetableResource, ProgrammeDetailResource};

class ProgrammeController extends Controller
{
    private $programmeRepository;

    /**
     * @param ProgrammeRepositoryInterface $programmeRepository
     *
     */
    public function __construct(ProgrammeRepositoryInterface $programmeRepository)
    {
        $this->programmeRepository = $programmeRepository;
    }

    /** Gets programme timetable for a specified channel for a date and timezone
     *
     */
    public function getProgrammesChannel($channel_uuiid, $date, $timezone) {
        try {
            $data = $this->programmeRepository->getProgrammeByChannelData(func_get_args());
            return response()->json([
                [
                    'status' => true,
                    'message' => 'Programme timetable fetched successfully!',
                    'data' => ProgrammeTimetableResource::collection($data),
                ]
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
                'message' => $e->getMessage(),
            ], 403);
        }
    }

    /** Gets programme information
     *
     */
    public function getProgrammeInformation($channel_uuid, $programme_uuid) {
        try {
            $data = $this->programmeRepository->getProgrammeInformation(func_get_args());
            return response()->json([
                [
                    'status' => true,
                    'message' => 'Programme information fetched successfully!',
                    'data' => ProgrammeDetailResource::collection($data),
                ]
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
                'message' => $e->getMessage(),
            ], 403);
        }
    }

}

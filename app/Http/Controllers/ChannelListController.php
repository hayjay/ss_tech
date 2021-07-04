<?php

namespace App\Http\Controllers;

use App\Interfaces\ChannelList\ChannelListRepositoryInterface;
use App\Http\Resources\ChannelList\{ChannelListResource};

class ChannelListController extends Controller
{
    private $channelListRepository;

    /**
     * @param ChannelListRepositoryInterface $channelListRepository
     *
     */
    public function __construct(ChannelListRepositoryInterface $channelListRepository)
    {
        $this->channelListRepository = $channelListRepository;
    }

    /** Gets all Channel Lists
     *
     */
    public function fetch():
    object
    {
        try {
            $data = $this->channelListRepository->all();
            return response()->json([
                [
                    'status' => true,
                    'message' => 'Channel Lists Fetched Successfully!',
                    'data' => ChannelListResource::collection($data),
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

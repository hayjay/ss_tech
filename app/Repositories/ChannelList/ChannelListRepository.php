<?php
namespace App\Repositories\ChannelList;

use App\Interfaces\ChannelList\ChannelListRepositoryInterface;
use App\Models\Channel;

class ChannelListRepository implements ChannelListRepositoryInterface
{
    private $channel;

    public function __construct(Channel $channel) {
        $this->channel = $channel;
    }

    public function all()
    {
    	$channels = $this->channel->all();
        return $channels;
    }

}

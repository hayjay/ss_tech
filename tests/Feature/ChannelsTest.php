<?php

namespace Tests\Feature;

use Tests\TestCase;

class ChannelsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_channels_can_be_fetched()
    {
        $response = $this->get(
            config('constants.api_endpoint_urls.channels_endpoint')
        );

        $response->assertStatus(200);
    }
}

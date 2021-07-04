<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProgrammeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_programmes_can_be_fetched()
    {
        $response = $this->get(
            config('constants.api_endpoint_urls.programmes_endpoint')
        );

        $response->assertStatus(200);
    }
}

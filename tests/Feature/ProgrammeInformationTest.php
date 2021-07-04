<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProgrammeInformationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_programme_information_can_be_fetched()
    {
        $response = $this->get(
            config('constants.api_endpoint_urls.programme_information_endpoint')
        );

        $response->assertStatus(200);
    }
}

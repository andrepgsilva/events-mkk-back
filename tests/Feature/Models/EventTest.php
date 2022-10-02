<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_get_the_latest_events()
    {
        $this->seed();

        $response = $this->get('/api/events');

        $response->assertOk();
    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BikeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBikeSave()
    {
        $user = factory(\App\User::class)->create();
        $bike = new \App\Bike();
        $user->bikes()->save($bike);

        $this->assertTrue($bike->save());
    }
}

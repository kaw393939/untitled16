<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModel()
    {
        $car = factory(\App\Car::class)->make();
        $this->assertInstanceOf(\App\Car::class, $car);


        //$this->assertTrue($user->save());
    }
    public function testCarSave()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue($user->save());

        $car = factory(\App\Car::class)->make();
        $this->assertInstanceOf(\App\Car::class, $user->cars()->save($car));

        //$this->assertTrue($user->cars()->save($car));

    }

}

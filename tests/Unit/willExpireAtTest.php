<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use DTApi\Helpers\TeHelper;

class willExpireAtTest extends TestCase
{
    use RefreshDatabase;

    public function test_difference_at_90()
    {
        // passing a dummy params     

        $sTime = (new TeHelper())->willExpireAt('2021-09-25 15:51:10', '2021-09-23 15:51:10');
        $this->assertTrue('2021-09-25 16:51:10', $sTime);
    }

    public function test_difference_at_24()
    {
        // passing a dummy params     

        $sTime = (new TeHelper())->willExpireAt('2021-09-25 15:51:10', '2021-09-23 15:51:10');
        $this->assertTrue('2021-09-25 16:51:10', $sTime);
    }

    public function test_difference_at_24_72()
    {
        // passing a dummy params     

        $sTime = (new TeHelper())->willExpireAt('2021-09-25 15:51:10', '2021-09-23 15:51:10');
        $this->assertTrue('2021-09-25 16:51:10', $sTime);
    }

    public function test_difference_16()
    {
        // passing a dummy params     

        $sTime = (new TeHelper())->willExpireAt('2021-09-25 15:51:10', '2021-09-23 15:51:10');
        $this->assertTrue('2021-09-25 16:51:10', $sTime);
    }

    public function test_difference_48()
    {
        // passing a dummy params     

        $sTime = (new TeHelper())->willExpireAt('2021-09-25 15:51:10', '2021-09-23 15:51:10');
        $this->assertTrue('2021-09-25 16:51:10', $sTime);
    }

}

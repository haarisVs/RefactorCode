<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use DTApi\Repository\UserRepository;

class createOrUpdateTest extends TestCase
{
    use RefreshDatabase;

    /*
    * Creating just simple test case, not creating all cases,
        However we can create more test cases for createOrUpdateTest. 
    */

    public function test_createOrUpdate_Id_null()
    {        
        $data = array(); // blank array
        $result = (new UserRepository())->createOrUpdate('', data);
        $this->assertTrue(false, $result);
    }

    public function test_createOrUpdate_Id_()
    {        
        $data = array(); // supose array filledup
        $result = (new UserRepository())->createOrUpdate(2, data);
        $this->assertTrue(true, $result);
    }
}

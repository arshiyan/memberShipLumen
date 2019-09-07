<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class UserTest extends TestCase
{

    public function testRegister()
    {
        $this->post('api/register');
        $this->assertJson($this->response->getContent());
    }

    public function testGetProfile()
    {
        $this->get('api/profile');
        $this->assertJson($this->response->getContent());
    }

}

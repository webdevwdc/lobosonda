<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HTTPTest extends TestCase
{
       
    /**
     * Check out the /users index page
     */
    public function test_admin_login_submission()
    {
        $this->assertTrue(true);
        $response = $this->call('POST', '/login/save');
        $this->assertEquals(302, $response->status());
       // $this->assertRedirectedToRoute("admin.dashboard.index");
    }
}

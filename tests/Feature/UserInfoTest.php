<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\UserInfo;
use Database\Factories\UserInfoFactory;

class UserInfoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use WithFaker;

    public function test()
    {
        // Return View
        $response = $this->get('/');

        $response->assertStatus(200);

        // Get
        $response = $this->call('GET', '/api/user');

        $this->assertEquals(200, $response->getStatusCode());

        // Get userId = 1
        $response = $this->call('GET', '/api/user/1');

        $this->assertEquals(200, $response->getStatusCode());

       // Post

        $payload = UserInfo::factory()->create()->toArray();

        $response = $this->call('POST', '/api/user', $payload);

        $this ->assertEquals(201, $response->getStatusCode());

        // Put

        $payloadPut = [
            'userId' => 1,
            'userName' => $this->faker->name,
            'account' => $this->faker->userName,
            'pw' => $this->faker->password,
            'email' => $this->faker->unique()->safeEmail
        ];

        $response = $this->call('PUT', '/api/user/1', $payloadPut);

        $this ->assertEquals(200, $response->getStatusCode());

        // Delete

        $response = $this->call('DELETE', '/api/user/1');

        $this ->assertEquals(204, $response->getStatusCode());
    }
}

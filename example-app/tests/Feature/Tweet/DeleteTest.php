<?php

namespace Tests\Feature\Tweet;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_succeed(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $tweet = Tweet::factory()->create(['user_id' => $user->id]);

        $response = $this->delete('/tweet/delete/' . $tweet->id);

        $response->assertRedirect('/tweet');
    }
}

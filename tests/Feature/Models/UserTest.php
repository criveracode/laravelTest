<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;//Migrate
   
    public function testUser()
    {
        //Creamos un usuario.
        User::factory()->create([
            'email' => 'a@app.com'
        ]);

        $this->assertDatabaseHas('users',[
            'email' => 'a@app.com'
        ]);

        $this->assertDatabaseMissing('users',[
            'email' => 'no@existe.com'
        ]);
    }
}

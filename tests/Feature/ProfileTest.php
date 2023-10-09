<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProfileTest extends TestCase
{

    public function testUpload(): void
    {
       Storage::fake('local');
       $response = $this->post('profile',[
            'photo' => $photo = UploadedFile::fake()->image('photo.png')
       ]);

       Storage::disk('local')->assertExists("profiles/{$photo->hashName()}");

       $response->assertRedirect('profile');

    }

    public function test_photo_require()
    {
        $response = $this->post('profile',['photo' => '']);

        $response->assertSessionHasErrors('photo');

    }
}

<?php

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{

    public function testEmail(): void
    {   
        $result = Email::validate('admin@app.com');
        $this->assertTrue($result);

        $result = Email::validate('admin@@app.com');
        $this->assertFalse($result);
    }
}


/* Para testear una clase con un metodo especifico:
 * % php artisan test --filter testEmail
 */
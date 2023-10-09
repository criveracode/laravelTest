<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    
    public function testFunctions(): void
    {
        $result = validate_email('admin@app.com');
        $this->assertTrue($result);

        $result = validate_email('admin@ @app.com');
        $this->assertFalse($result);
    }
}

/* 
* Para testear una clase con un metodo especifico:
* % php artisan test --filter testFunctions
*/
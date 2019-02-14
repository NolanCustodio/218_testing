<?php
/**
 * Created by PhpStorm.
 * User: michaelnichols
 * Date: 2019-02-13
 * Time: 19:00
 */

declare(strict_types=1);
//namespace src;

use PHPUnit\Framework\TestCase;

final class indexTest extends TestCase
{
    public function testString(): void
    {
        $this->assertIsString("Mike");
    }

    public function testBool(): void {
        $this->assertIsBool(true);
    }

    public function testInt(): void
    {
        $this->assertIsInt(5);
    }

    public function testFloat(): void
    {
        $this->assertIsFloat(0.2);
    }
}
<?php declare(strict_types=1);

use HelloPhp\Greetings;
use PHPUnit\Framework\TestCase;

/**
 * @uses \HelloPhp\Greetings
 * @covers \HelloPhp\Greetings
 */
final class GreetingsTest extends TestCase {
    public function testHello(): void {
        $expectedOutput = "Hello World";
        $this->assertSame($expectedOutput, Greetings::sayHelloWorld());
    }
}
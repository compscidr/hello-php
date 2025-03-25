<?php declare(strict_types=1);

use HelloPhp\Greetings;
use PHPUnit\Framework\TestCase;

#[\PHPUnit\Framework\Attributes\CoversClass(Greetings::class)]
final class GreetingsTest extends TestCase {

    public function testHello(): void {
        $expectedOutput = "Hello World";
        $this->assertSame($expectedOutput, Greetings::sayHelloWorld());
    }

    public function testSecret(): void {
        $expectedOutput = "Hello somesecret";
        $this->assertSame($expectedOutput, Greetings::sayHelloSecret());
    }
}
<?php declare(strict_types=1);

namespace HelloPhp;

use Dotenv\Dotenv;
class Greetings
{
    public static function sayHelloWorld(): string
    {
        return "Hello World";
    }

    public static function sayHelloSecret(): string {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();
        $secret = $_ENV['SAMPLE_SECRET'];
            return "Hello $secret";
    }
}
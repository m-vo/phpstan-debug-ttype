<?php
declare(strict_types=1);

class Test extends \PHPUnit\Framework\TestCase
{
    public const A = 0;
    public const B = 1;

    public function testDemo(): void
    {
        $foo = 0;

        self::assertSame(self::A, $foo);
        self::assertSame(self::B, $foo);
        self::assertSame(self::B, $foo);
    }
}
<?php
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

declare(strict_types=1);

namespace Lcobucci\JWT\Claim;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 2.0.0
 */
class BasicTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @covers \Lcobucci\JWT\Claim\Basic::__construct
     */
    public function constructorShouldConfigureTheAttributes()
    {
        $claim = new Basic('test', 1);

        self::assertAttributeEquals('test', 'name', $claim);
        self::assertAttributeEquals(1, 'value', $claim);
    }

    /**
     * @test
     *
     * @uses \Lcobucci\JWT\Claim\Basic::__construct
     *
     * @covers \Lcobucci\JWT\Claim\Basic::getName
     */
    public function getNameShouldReturnTheClaimName()
    {
        $claim = new Basic('test', 1);

        self::assertEquals('test', $claim->getName());
    }

    /**
     * @test
     *
     * @uses \Lcobucci\JWT\Claim\Basic::__construct
     *
     * @covers \Lcobucci\JWT\Claim\Basic::getValue
     */
    public function getValueShouldReturnTheClaimValue()
    {
        $claim = new Basic('test', 1);

        self::assertEquals(1, $claim->getValue());
    }

    /**
     * @test
     *
     * @uses \Lcobucci\JWT\Claim\Basic::__construct
     *
     * @covers \Lcobucci\JWT\Claim\Basic::jsonSerialize
     */
    public function jsonSerializeShouldReturnTheClaimValue()
    {
        $claim = new Basic('test', 1);

        self::assertEquals(1, $claim->jsonSerialize());
    }

    /**
     * @test
     *
     * @uses \Lcobucci\JWT\Claim\Basic::__construct
     *
     * @covers \Lcobucci\JWT\Claim\Basic::__toString
     */
    public function toStringShouldReturnTheClaimValue()
    {
        $claim = new Basic('test', 1);

        self::assertEquals('1', (string) $claim);
    }
}

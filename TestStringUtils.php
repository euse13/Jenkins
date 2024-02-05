<?php

use PHPUnit\Framework\TestCase;

require_once 'StringUtils.php';

class TestStringUtils extends TestCase
{
    // Pruebas para reverseString

    public function reverseStringDataProvider(): array
    {
        return [
            ['hola', 'aloh'],
            ['perro', 'orrep'],
            ['12345', '54321'],
        ];
    }

    /**
     * @dataProvider reverseStringDataProvider
     */
    public function testReverseStringEquals(string $input, string $expected): void
    {
        $result = reverseString($input);
        $this->assertEquals($expected, $result);
    }

    public function reverseStringNotEqualsDataProvider(): array
    {
        return [
            ['hola', 'hola'],
            ['perro', 'perro'],
            ['12345', '12345'],
        ];
    }

    /**
     * @dataProvider reverseStringNotEqualsDataProvider
     */
    public function testReverseStringNotEquals(string $input, string $expected): void
    {
        $result = reverseString($input);
        $this->assertNotEquals($expected, $result);
    }

    // Pruebas para toUpperCase

    public function toUpperCaseDataProvider(): array
    {
        return [
            ['hola', 'HOLA'],
            ['perro', 'PERRO'],
            ['123abc', '123ABC'],
        ];
    }

    /**
     * @dataProvider toUpperCaseDataProvider
     */
    public function testToUpperCaseEquals(string $input, string $expected): void
    {
        $result = toUpperCase($input);
        $this->assertEquals($expected, $result);
    }

    public function toUpperCaseNotEqualsDataProvider(): array
    {
        return [
            ['hola', 'hola'],
            ['perro', 'perro'],
            ['123abc', '123abc'],
        ];
    }

    /**
     * @dataProvider toUpperCaseNotEqualsDataProvider
     */
    public function testToUpperCaseNotEquals(string $input, string $expected): void
    {
        $result = toUpperCase($input);
        $this->assertNotEquals($expected, $result);
    }

    // Pruebas para toLowerCase

    public function toLowerCaseDataProvider(): array
    {
        return [
            ['HOLa', 'hola'],
            ['PeRRo', 'perro'],
            ['123AbC', '123abc'],
        ];
    }

    /**
     * @dataProvider toLowerCaseDataProvider
     */
    public function testToLowerCaseEquals(string $input, string $expected): void
    {
        $result = toLowerCase($input);
        $this->assertEquals($expected, $result);
    }

    public function toLowerCaseNotEqualsDataProvider(): array
    {
        return [
            ['HOLa', 'HOLa'],
            ['PeRRo', 'PeRRo'],
            ['123ABC', '123ABC'],
        ];
    }

    /**
     * @dataProvider toLowerCaseNotEqualsDataProvider
     */
    public function testToLowerCaseNotEquals(string $input, string $expected): void
    {
        $result = toLowerCase($input);
        $this->assertNotEquals($expected, $result);
    }

    // Pruebas para countLetters

    public function countLettersDataProvider(): array
    {
        return [
            ['hola', 4],
            ['perro', 5],
            ['123ABC', 3],
        ];
    }

    /**
     * @dataProvider countLettersDataProvider
     */
    public function testCountLettersEquals(string $input, int $expected): void
    {
        $result = countLetters($input);
        $this->assertEquals($expected, $result);
    }

    public function countLettersNotEqualsDataProvider(): array
    {
        return [
            ['hola', 6],
            ['perro', 7],
            ['123ABC', 4],
        ];
    }

    /**
     * @dataProvider countLettersNotEqualsDataProvider
     */
    public function testCountLettersNotEquals(string $input, int $expected): void
    {
        $result = countLetters($input);
        $this->assertNotEquals($expected, $result);
    }
}

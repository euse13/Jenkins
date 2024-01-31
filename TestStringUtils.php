<?php

use PHPUnit\Framework\TestCase;

require_once 'StringUtils.php';

class TestStringUtils extends TestCase
{
    // Pruebas para reverseString
    public function reverseStringEqualsProvider()
    {
        return [
            ['hola', 'aloh'],
            ['perro', 'orrep'],
            ['12345', '54321'],
        ];
    }

    /**
     * @dataProvider reverseStringEqualsProvider
     */
    public function testReverseStringEquals($input, $expected)
    {
        $result = reverseString($input);
        $this->assertEquals($expected, $result);
    }

    public function reverseStringNotEqualsProvider()
    {
        return [
            ['hola', 'hola'],
            ['perro', 'perro'],
            ['12345', '12345'],
        ];
    }

    /**
     * @dataProvider reverseStringNotEqualsProvider
     */
    public function testReverseStringNotEquals($input, $expected)
    {
        $result = reverseString($input);
        $this->assertNotEquals($expected, $result);
    }

    // Pruebas para toUpperCase
    public function toUpperCaseEqualsProvider()
    {
        return [
            ['hola', 'HOLA'],
            ['perro', 'PERRO'],
            ['123abc', '123ABC'],
        ];
    }

    /**
     * @dataProvider toUpperCaseEqualsProvider
     */
    public function testToUpperCaseEquals($input, $expected)
    {
        $result = toUpperCase($input);
        $this->assertEquals($expected, $result);
    }

    public function toUpperCaseNotEqualsProvider()
    {
        return [
            ['hola', 'hola'],
            ['perro', 'perro'],
            ['123abc', '123abc'],
        ];
    }

    /**
     * @dataProvider toUpperCaseNotEqualsProvider
     */
    public function testToUpperCaseNotEquals($input, $expected)
    {
        $result = toUpperCase($input);
        $this->assertNotEquals($expected, $result);
    }

    // Pruebas para toLowerCase
    public function toLowerCaseEqualsProvider()
    {
        return [
            ['HOLa', 'hola'],
            ['PeRRo', 'perro'],
            ['123AbC', '123abc'],
        ];
    }

    /**
     * @dataProvider toLowerCaseEqualsProvider
     */
    public function testToLowerCaseEquals($input, $expected)
    {
        $result = toLowerCase($input);
        $this->assertEquals($expected, $result);
    }

    public function toLowerCaseNotEqualsProvider()
    {
        return [
            ['HOLa', 'HOLa'],
            ['PeRRo', 'PeRRo'],
            ['123ABC', '123ABC'],
        ];
    }

    /**
     * @dataProvider toLowerCaseNotEqualsProvider
     */
    public function testToLowerCaseNotEquals($input, $expected)
    {
        $result = toLowerCase($input);
        $this->assertNotEquals($expected, $result);
    }

    // Pruebas para countLetters
    public function countLettersEqualsProvider()
    {
        return [
            ['hola', 4],
            ['perro', 5],
            ['123ABC', 3],
        ];
    }

    /**
     * @dataProvider countLettersEqualsProvider
     */
    public function testCountLettersEquals($input, $expected)
    {
        $result = countLetters($input);
        $this->assertEquals($expected, $result);
    }

    public function countLettersNotEqualsProvider()
    {
        return [
            ['hola', 6],
            ['perro', 7],
            ['123ABC', 4],
        ];
    }

    /**
     * @dataProvider countLettersNotEqualsProvider
     */
    public function testCountLettersNotEquals($input, $expected)
    {
        $result = countLetters($input);
        $this->assertNotEquals($expected, $result);
    }
}
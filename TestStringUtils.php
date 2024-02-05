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
}
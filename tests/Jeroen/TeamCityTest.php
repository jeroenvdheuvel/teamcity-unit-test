<?php

namespace Jeroen;

use PHPUnit_Framework_TestCase;
use Jeroen\TeamCity;

class TeamCityTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var TeamCity
     */
    private $teamCity;

    public function setUp()
    {
        $this->teamCity = new TeamCity();
    }

    public function testTrue()
    {
        $this->assertTrue($this->teamCity->getTrue());
    }

    public function testFalse()
    {
        $this->assertFalse($this->teamCity->getFalse());
    }

    public function testGetRandomInt()
    {
        $value = $this->teamCity->getRandomInt();
        $this->assertGreaterThanOrEqual(0, $value);
    }

    public function testGetRandomInt2()
    {
        $value = $this->teamCity->getRandomInt();
        $this->assertLessThanOrEqual(1000000, $value);
    }

    public function testGetString()
    {
        $this->assertEquals('string', $this->teamCity->getString());
    }

    public function testGetString2()
    {
        $this->assertStringEndsWith('ng', $this->teamCity->getString());
    }

    public function testGetString3()
    {
        $this->assertStringStartsWith('st', $this->teamCity->getString());
    }

    public function testGetString4()
    {
        $this->assertStringStartsWith('str', $this->teamCity->getString());
    }

    public function testGetString5()
    {
        $this->assertStringStartsWith('stri', $this->teamCity->getString());
    }

    public function testGetEmptyArray()
    {
        $this->assertEmpty($this->teamCity->getEmptyArray());
    }

    public function testGetArrayWithRandomIntsEmpty()
    {
        $this->assertEmpty($this->teamCity->getArrayWithRandomInts(0));
    }

    public function testGetArrayWithRandomInts()
    {
        $values = $this->teamCity->getArrayWithRandomInts(2);
        $this->assertNotEmpty($values);
        $this->assertCount(2, $values);

    }
}

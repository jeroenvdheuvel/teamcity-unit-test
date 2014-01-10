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

    public function testRandomInt()
    {
        $value = $this->teamCity->getRandomInt();
        $this->assertGreaterThanOrEqual(0, $value);
    }
}

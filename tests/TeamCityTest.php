<?php
require_once 'TeamCity.php';

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
}

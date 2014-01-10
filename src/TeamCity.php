<?php

class TeamCity
{
    public function getTrue()
    {
        return true;
    }

    public function getFalse()
    {
        return false;
    }

    public function getRandomInt()
    {
        return mt_rand(0, 1000000);
    }
}
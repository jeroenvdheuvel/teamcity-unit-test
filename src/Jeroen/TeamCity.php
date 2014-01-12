<?php

namespace Jeroen;

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

    public function getString()
    {
        return 'string';
    }

    public function getEmptyArray()
    {
        return array();
    }

    public function getArrayWithRandomInts($amount)
    {
        $array = array();
        for ($i=0; $i<$amount; $i++) {
            $array[] = $this->getRandomInt();
        }

        return $array;
    }
}
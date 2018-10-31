<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mastermind extends Model

{
  private $name;
  private $keylength;
  private $colors;
  private $repeat;
  private $attempts;
  private $key = [];


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

    }

    public function getKeylength()
    {
        return $this->keylength;
    }

    public function setKeylength($keylength)
    {
        $this->keylength = $keylength;

    }

    public function getColors()
    {
        return $this->colors;
    }

    public function setColors($colors)
    {
        $this->colors = $colors;

    }

    public function getRepeat()
    {
        return $this->repeat;
    }

    public function setRepeat($repeat)
    {
        $this->repeat = $repeat;

    }

    public function getAttempts()
    {
        return $this->attempts;
    }

    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public static function withProperties($name, $keylength, $colors, $repeat, $attempts, $key){
      $mastermind = new Mastermind();
      $mastermind->setName($name);
      $mastermind->setKeylength($keylength);
      $mastermind->setColors($colors);
      $mastermind->setRepeat($repeat);
      $mastermind->setAttempts($attempts);
      $mastermind->setKey($key);

      return $mastermind ;
    }

    public static function generateRandomKey($keylength, $colors, $repeat){
      $key = self::repeat
    }
}

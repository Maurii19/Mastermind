<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    private $imgLink;
    private $value;

    public function getImgLink()
    {
        return $this->imgLink;
    }

    public function setImgLink($imgLink)
    {
        $this->imgLink = $imgLink;

    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;

    }

    public static function withProperties($imgLink, $value){
      $ball = new Ball();
      $ball ->setImgLink($imgLink);
      $ball ->setValue($value);
      return $ball;
    }


}

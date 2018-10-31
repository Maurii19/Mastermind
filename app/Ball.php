<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    private $imgLink;
    private $value;

    public static function withProperties($imgLink, $value){
      $ball = new Ball();
      $ball ->setImgLink($imgLink);
      $ball ->setValue($value);
      return $ball;
    }

    public function getImgLink(){
        return $this->imgLink;
    }

    public function setImgLink($imgLink){
        $this->imgLink = $imgLink;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
        $this->value = $value;
    }

    public static function generateUserKey($keylength, $userKeyValue){
      $userkey = array();
      for ($i=0; $i < $keylength ; $i++) {
        array_push($userkey, self::withProperties($userKeyValue[$i], "/images/bola".$userKeyValue[$i]."png"));
      }

      return $userkey;
    }

}

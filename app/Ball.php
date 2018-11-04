<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    private $imgLink;
    private $value;

    public static function withProperties($value, $imgLink){
      $ball = new Ball();
      $ball->setValue($value);
      $ball->setImgLink($imgLink);
      
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
      $userKey = array();
    for($i = 0; $i < $keylength;$i++){
      array_push($userKey, self::withProperties($userKeyValue[$i],"/images/bola".$userKeyValue[$i].".png"));
    }

      return $userKey;
    }

}

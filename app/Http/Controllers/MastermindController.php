<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mastermind;
use App\Ball;

class MastermindController extends Controller
{
    function getIndex(){
    	return view('index');
    }

    function postDatos(Request $request){
    	$name=$request->input('name');
    	$keylength=$request->input('keylength');
    	$colors=$request->input('colors');
    	$repeat=$request->input('repeat');
    	$attempts=$request->input('attempts');
      $key=Mastermind::generateRandomKey($keylength, $colors, $repeat);
      $mastermind=Mastermind::withProperties($name, $keylength, $colors, $repeat, $attempts, $key);
      $request->session()->put('mastermind', $mastermind);
      $request->session()->put('userKey', array());
    	return view('mastermind',['keylength'=>$keylength, 'name'=>$name, 'attempts'=>$attempts, 'key'=>$key]);
    }

    function postGame(Request $request){
      $userKeyValue = array();
      $keylength = $request->session()->get('mastermind')->getKeylength();
      for ($i=0; $i < $keylength ; $i++) {
        $value = $request->input( 'value'.($i+1));
        array_push($userKeyValue,$value);
      }
      $userkey = Ball::generateUserKey($keylength, $userKeyValue);
      $request->session()->push('userKey', $userkey);
      return view('mastermind');
    }
}

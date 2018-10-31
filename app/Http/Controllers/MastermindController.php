<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mastermind;

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
      $request->session()->('mastermind', $mastermind);
      $request->session()->('userKey', array());
    	return view('mastermind');
    }

    function postGame(Request $request){

    }
}

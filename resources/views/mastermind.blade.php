@extends('layout.layout')
@section('title', 'Mastermind en Laravel')
    @section('content')
    <div class="row">
    	<div class="col">
    <h1>Bienvenidoa/a al Mastermind!</h1>
    @for ($i = 0;$i < count(Session::get('mastermind')->getKey());$i++)
   <img height="64px" width="64px" src="{{ Session::get('mastermind')->getKey()[$i]->getImgLink() }}" value="{{ Session::get('mastermind')->getKey()[$i]->getValue() }}" />
@endfor

<hr /><hr />

    @for ($i = 0;$i < count(Session::get('userKey'));$i++)

      @for ($j = 0;$j < count(Session::get('userKey')[$i]);$j++)
        <img height="64px" width="64px" src="{{ Session::get('userKey')[$i][$j]->getImgLink() }}" value="{{ Session::get('userKey')[$i][$j]->getValue() }}" />
      @endfor


      <hr />

@endfor
    <br />
    <p>Introduce un código: </p>
    <form action="{{ URL::to('/mastermind') }}" method="POST">
      @csrf
      @if( $keylength == 4 )
	    <select name="colors">
	    	<option value="1">Azul</option>
	    	<option value="2">Naranja</option>
	    	<option value="3">Verde</option>
	    	<option value="4">Rojo</option>
	    	<option value="5">Celeste</option>
	    	<option value="6">Violeta</option>
	    	<option value="7">Amarillo</option>
	    	<option value="8">Gris</option>
	  	</select>
	  	<select name="colors">
	    	<option value="1">Azul</option>
	    	<option value="2">Naranja</option>
	    	<option value="3">Verde</option>
	    	<option value="4">Rojo</option>
	    	<option value="5">Celeste</option>
	    	<option value="6">Violeta</option>
	    	<option value="7">Amarillo</option>
	    	<option value="8">Gris</option>
	  	</select>
	  	<select name="colors">
	    	<option value="1">Azul</option>
	    	<option value="2">Naranja</option>
	    	<option value="3">Verde</option>
	    	<option value="4">Rojo</option>
	    	<option value="5">Celeste</option>
	    	<option value="6">Violeta</option>
	    	<option value="7">Amarillo</option>
	    	<option value="8">Gris</option>
	  	</select>
	  	<select name="colors">
	    	<option value="1">Azul</option>
	    	<option value="2">Naranja</option>
	    	<option value="3">Verde</option>
	    	<option value="4">Rojo</option>
	    	<option value="5">Celeste</option>
	    	<option value="6">Violeta</option>
	    	<option value="7">Amarillo</option>
	    	<option value="8">Gris</option>
	  	</select>
      @elseif( $keylength == 5 )
	  	<select name="colors">
	    	<option value="1">Azul</option>
	    	<option value="2">Naranja</option>
	    	<option value="3">Verde</option>
	    	<option value="4">Rojo</option>
	    	<option value="5">Celeste</option>
	    	<option value="6">Violeta</option>
	    	<option value="7">Amarillo</option>
	    	<option value="8">Gris</option>
	  	</select>

      <select name="colors">
        <option value="1">Azul</option>
        <option value="2">Naranja</option>
        <option value="3">Verde</option>
        <option value="4">Rojo</option>
        <option value="5">Celeste</option>
        <option value="6">Violeta</option>
        <option value="7">Amarillo</option>
        <option value="8">Gris</option>
      </select>
      <select name="colors">
        <option value="1">Azul</option>
        <option value="2">Naranja</option>
        <option value="3">Verde</option>
        <option value="4">Rojo</option>
        <option value="5">Celeste</option>
        <option value="6">Violeta</option>
        <option value="7">Amarillo</option>
        <option value="8">Gris</option>
      </select>
      <select name="colors">
        <option value="1">Azul</option>
        <option value="2">Naranja</option>
        <option value="3">Verde</option>
        <option value="4">Rojo</option>
        <option value="5">Celeste</option>
        <option value="6">Violeta</option>
        <option value="7">Amarillo</option>
        <option value="8">Gris</option>
      </select>
      <select name="colors">
        <option value="1">Azul</option>
        <option value="2">Naranja</option>
        <option value="3">Verde</option>
        <option value="4">Rojo</option>
        <option value="5">Celeste</option>
        <option value="6">Violeta</option>
        <option value="7">Amarillo</option>
        <option value="8">Gris</option>
      </select>
      @endif
	  	<br>
	  <br><input type="submit" value="Comprobar">
  	</form>

  	<h3>Jugador/a: {{ $name }}</h3><hr />

     <p>Intentos: {{ $attempts }} / {{ $attempts }}</p>


    </div>

    </div>

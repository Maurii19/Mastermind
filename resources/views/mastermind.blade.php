@extends('layout.layout')
@section('title', 'Mastermind en Laravel')
    @section('content')
    <div class="row">
    	<div class="col">
    <h1>Bienvenidoa/a al Mastermind!</h1>

 
    
    <hr/><hr />

    @for ($i = 0; $i < count(Session::get('userKey'));$i++)
      @for ($j = 0; $j < count(Session::get('userKey')[$i]);$j++)
        <img heigth="32px" width="32px" src=" {{ Session::get('userKey')[$i][$j]->getImgLink() }}" value=" {{ Session::get('userKey')[$i][$j]->getValue() }}"/>
      @endfor

      <hr />
    @endfor

   
    <form action="{{ URL::to('/mastermind_comprobar') }}" method="POST">
      @csrf

     
      <span>Introduce un código: </span>
      @for ($i = 0; $i < Session::get('mastermind')->getKeylength();$i++)
	    <select name="value{{ $i+1 }}">
	     @for ($j = 0; $j < Session::get('mastermind')->getColors(); $j++)

       <option value="{{ $j+1 }}">Bola{{ $j+1 }}</option>
       @endfor

	  	</select>
      @endfor
     
	  	<br>
	  <br>
    
      
    <input type="submit" value="Comprobar">
    
  	</form>


    <hr />
  	<h3>Jugador/a: {{ Session::get('mastermind')->getName() }}</h3><hr />

     <h4>Intentos: {{ Session::get('mastermind')->getAttempts() }} </h4>

     <p>Recuerda que: </p>
     <p style="background-color: #d9d9d9;">Bola 1: Azul | Bola 2: Amarillo | Bola 3: Verde | Bola 4: Pistacho | Bola 5: Rojo | Bola 6: Azul celeste | Bola 7: Morado | Bola 8: Gris</p>

     <h4>Clave secreta:</h4>

      @if(Session::get('userKey') == Session::get('key'))
      @for ($i = 0;$i < count(Session::get('mastermind')->getKey());$i++)
      <img height="32px" width="32px" src="{{ Session::get('mastermind')->getKey()[$i]->getImgLink() }}" value="{{ Session::get('mastermind')->getKey()[$i]->getValue() }}" />
    @endfor
    @else
      <p>xD</p>
    @endif

     @for ($i = 0;$i < count(Session::get('mastermind')->getKey());$i++)
      <img height="32px" width="32px" src="{{ Session::get('mastermind')->getKey()[$i]->getImgLink() }}" value="{{ Session::get('mastermind')->getKey()[$i]->getValue() }}" />
    @endfor
  
    </div>

    </div>
@endsection
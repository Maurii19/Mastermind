@extends('layout.layout')
@section('title', 'Mastermind en Laravel')
	@section('content')
	<div class="row">
		<div class="col">
			<h1>Bienvenido/a al Mastermind!</h1>
			<img height="32px" width="32px" src="/images/bola1.png" value="1" />
			<img height="32px" width="32px" src="/images/bola2.png" value="2" />
			<img height="32px" width="32px" src="/images/bola3.png" value="3" />
			<img height="32px" width="32px" src="/images/bola4.png" value="4" />
			<img height="32px" width="32px" src="/images/bola5.png" value="5" />
			<img height="32px" width="32px" src="/images/bola6.png" value="6" />
			<img height="32px" width="32px" src="/images/bola7.png" value="7" />
			<img height="32px" width="32px" src="/images/bola8.png" value="8" />

			
	<form action="{{ URL::to('/mastermind') }}" method="POST">
		@csrf
		<span>Jugador/a</span>
		<input type="text" name="name"><br>
		<br><p>Longitud de la clave:</p>
			<input type="radio" name="keylength" value="4" > 4
			<input type="radio" name="keylength" value="5" > 5
		<p>Numero de colores posibles:</p>
			<input type="radio" name="colors" value="4" > 4
			<input type="radio" name="colors" value="5" > 5
			<input type="radio" name="colors" value="6" > 6
			<input type="radio" name="colors" value="7" > 7
			<input type="radio" name="colors" value="8" > 8
		<p>Permitir repetidos</p>
			<input type="radio" name="repeat" value="true" > Si
			<input type="radio" name="repeat" value="false" > No
		<p>Numero de intentos:</p>
			<select name="attempts" required>
		    	<option value="1">1</option>
		    	<option value="2">2</option>
		    	<option value="3">3</option>
		    	<option value="4">4</option>
		    	<option value="5">5</option>
		    	<option value="6">6</option>
		    	<option value="7">7</option>
		    	<option value="8">8</option>
	  		</select><br>
<br>
		<input type="submit" value="Iniciar Partida">

	</form>
</div>
</div>
	@endsection

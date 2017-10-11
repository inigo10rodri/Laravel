
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method=post action="/mensajeAgur">
	{{ csrf_field()}}
    	<input type= "email" name="correo" value="Correo electronico" required></input><br>
		<input type="text" name="nombre" value="Nombre" required></input><br>
		<input type="submit" name="aceptar" value="Enviar"></input>
</form>


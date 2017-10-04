

<form method=post action="/mensajeAgur">
	{{ csrf_field()}}
    	<input type= "email" name="correo" value="Correo electronico" required></input>
		<input type="text" name="nombre" required></input>
		<input type="submit" name="aceptar" value="Enviar"></input>
	
</form>


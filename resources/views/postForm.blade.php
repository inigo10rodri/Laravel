<form method=post action="/mensajeAgur">
	{{ csrf_field()}}
    	<input type= "text" name="correo" value="Correo electronico"></input>
	<input type="submit" name="aceptar" value="Enviar"></input>
	
</form>

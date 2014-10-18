<html>
<body>
<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
<table>
<tr>
<th>id</th>
<th>descripcion</th>
<th>precio</th>
<th>opciones</th>
</tr>
<tr>
<td> <input type="text" name="datos[id1]" /></td>
<td> <input type="text" name="datos[descripcion1]" /></td>
<td> <input type="text" name="datos[precio1]" /></td>
<td>
				<a href="editar.html">Editar</a>
				<a href="eliminar">Eliminar</a>
				</td>

</tr>
<tr>
<td> <input type="text" name="datos[id2]" /></td>
<td> <input type="text" name="datos[descripcion2]" /></td>
<td> <input type="text" name="datos[precio2]" /></td>
<td>
				<a href="editar.html">Editar</a>
				<a href="eliminar">Eliminar</a>
				</td>
</tr>
<tr>
<td> <input type="text" name="datos[id3]" /></td>
<td> <input type="text" name="datos[descripcion3]" /></td>
<td> <input type="text" name="datos[precio3]" /></td>
<td>
				<a href="editar.html">Editar</a>
				<a href="eliminar">Eliminar</a>
				</td>
</tr>
<tr>
<td> <input type="text" name="datos[id4]" /></td>
<td> <input type="text" name="datos[descripcion4]" /></td>
<td> <input type="text" name="datos[precio4]" /></td>
<td>
				<a href="editar.html">Editar</a>
				<a href="eliminar">Eliminar</a>
				</td>
</tr>
<tr>
<td> <input type="text" name="datos[id5]" /></td>
<td> <input type="text" name="datos[descripcion5]" /></td>
<td> <input type="text" name="datos[precio5]" /></td>
<td>
				<a href="editar.html">Editar</a>
				<a href="eliminar">Eliminar</a>
				</td>    
</tr>
</table>
    <input type="submit" value="¡enviarme!" />
</form>

</dody>
</html>

    <?php include ("views/header.php");
    RenderBanner("Gestion de Roles");
    ?>

    <?php include ("views/lateral.php");
    RenderLateral (1);
    ?>
    <div id="contenido">
	<form action="php/process_ModificarRol.php" method="post">
        <h1>Modificar Rol</h1>
        Seleccionar Rol: <SELECT NAME="Lista"><OPTION>Rol 1 <OPTION>Rol 2 <OPTION>Rol 3 </SELECT><br><br>
        Nombre: <INPUT TYPE="text" NAME="nombre" SIZE=19 MAXLENGTH=19><br><br>
        Descripci�n:   <TEXTAREA COLS="20" ROWS="1" NAME="desc"></TEXTAREA> <br><br>
        

        	<div class="tabla">
			<table>
				<tr><th>Usuarios</th></tr>
				<tr><td>Usuario1</td><td><input type="checkbox" name="Usuario1"/></td></tr>
				<tr><td>Usuario2</td><td><input type="checkbox" name="Usuario2" checked="yes"/></td></tr>
				<tr><td>Usuario3</td><td><input type="checkbox" name="Usuario3"/></td></tr>
				<tr><td>usuario4</td><td><input type="checkbox" name="usuario4" checked="yes"/></td></tr>
			</table>
		</div>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
                <tr><th>Funcionalidades</th></tr>
				<tr><td>Funci�n 1</td><td><input type="checkbox" name="Funcionalidad1"/></td></tr>
				<tr><td>Funci�n 2</td><td><input type="checkbox" name="Funcionalidad2" checked="yes"/></td></tr>
				<tr><td>Funci�n 3</td><td><input type="checkbox" name="Funcionalidad3"/></td></tr>
				<tr><td>Funci�n 4</td><td><input type="checkbox" name="Funcionalidad4" checked="yes"/></td></tr>
			</table>
		</div>
	  <input type="submit" onclick="history.go(-1)" value="Atras">
	  <form action="ModificarRol.php">
		<input type="submit" value="Guardar" class="Guardar"/>
	</form>
    </div>
    <?php include ("views/footer.php");
    RenderFooter("Admin");
    ?>


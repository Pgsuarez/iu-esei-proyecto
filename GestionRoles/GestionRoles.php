<?php include ("views/header.php");
	RenderBanner("Gesti�n de Roles");
?>

<?php include ("views/lateral.php");
        RenderLateral (1);
?>
	<div id="contenido">
	<form action="php/process_GestionRoles.php" method="post"> 
	<div class="tabla">
<table border ="2px">
    <tr align="center">
        <td>Rol</td>
        <td>Descripci�n</td>
        <td>Eliminar</td>
    </tr>
    <tr align ="center">
        <td>Rol 1</td>
        <td>Descripci�n Rol 1</td>
        <td><button>x</button></td>
    </tr>
    <tr align ="center">
        <td>Rol 2</td>
        <td>Descripci�n Rol 2</td>
        <td><button>x</button></td>
    </tr>
    <tr align="center">
        <td>Rol 3</td>
        <td>Descripci�n Rol 3</td>
        <td><button>x</button></td>
    </tr>
    <tr align="center">
        <td>Rol 4</td>
        <td>Descripci�n Rol 4</td>
        <td><button>x</button></td>
    </tr>
</table>
</div><br>
</form>
<form action="crearRol.php">
    <input type="submit" value="Crear"/>
</form>
<form action="ModificarRol.php">
    <input type="submit" value="Modificar" class="Modificar"/>
</form>
</div>
<?php include ("views/footer.php");
        RenderFooter("Admin");
?>
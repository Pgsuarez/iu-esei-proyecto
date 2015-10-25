<?php
  function RenderLateral($no){

	switch ($_SESSION["LE"])
		{
		case 'sp':
			include '../views/lenguaje/spanish.php';
			break;
		case 'en':
			include '../views/lenguaje/English.php';
			break;
		case 'br':
			include '../views/lenguaje/Brasilian.php';
			break;
		DEFAULT:
			include '../views/lenguaje/English.php';
			break;
		}

    $items = array("<a href='../GestionUsuarios/GestionUsuarios.php'>".$Idioma['Gestión de Usuarios']."</a>",
                    "<a href='../GestionRoles/GestionRoles.php'>".$Idioma['Gestión de Roles']."</a>",
                    "<a href='../GestionPaginas/GestionPaginas.php'>".$Idioma['Gestión de Páginas']."</a>",
                    "<a href='../GestionFuncionalidades/GestionFuncionalidades.php'>".$Idioma['Gestión de Funcionalidades']."</a>");
    echo "<div class=' lateral col-md-3 col-sm-12'>";
    echo "<ul class='nav nav-pills nav-stacked'>";
    echo "<li class= 'active'>";
    echo $items[$no];
    unset($items[$no]);
    echo "</li>";
    foreach ($items as $item) {
      echo "<li>".$item."</li>";
    }
    echo "</ul>";
    echo "</div>";
  }
?>

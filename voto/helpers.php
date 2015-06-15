<?php


function view($plantilla, $vars = array())
{
    extract($vars);
    require "views/$plantilla.tpl.php";
}

function messageExito($texto){
    print "<div id='dialog-message' title='XD Éxito'>";
    print "<p><span class='ui-icon ui-icon-circle-check' style='float:left; margin:0 7px 50px 0;'></span>";
    print  "$texto";
    print"</p><p><b></b></p></div>";
}

function controller($name)
{ 
     if (empty($name)){
	 $name = 'home';
     }


	$file = "controllers/$name.php";
	if (file_exists($file)) {
		require $file;
	}
	else
	{
	   header("HTTP/1.0 404 Not Found");
 	   require "views/error.tpl.php";
	}
	
}
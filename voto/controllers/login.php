<?php 
require 'config/database.php';



if (isset($_REQUEST['bot'])) {
	$login =$_REQUEST['correo'];
  $contra =$_REQUEST['contrasena'];
  $sql = "select * from admin WHERE usuario ='$login' AND contrasena = '$contra';";
                     
                    $datos = consultaD($con, $sql);
                    
                    //lleno las variables de sesion
                    foreach($datos as $value){
                      $id= $value['id'];
                      $correo= $value['usuario'];
                      $contrasena= $value['contrasena'];
                      $tipo= $value['tipo'];
                      
                    }


                    if (isset($correo) && isset($contrasena)){
                      if($login== $correo && $contra==$contrasena){
                          $_SESSION['id'] = $id;
                          $_SESSION['usuario'] = $correo;
                          $_SESSION['contrasena'] = $contrasena;



                        if ($tipo=='admin') {
                        	view('admin');
                        } else {
                        	view('user');
                        }
                        
                          
                        

            }else{
                echo "<div class= \"error text-center\" >La contraseña es incorrecta</div>";
                          view('login');
            }
        }else{
                        view('login');
            echo "<div class= \"alert-danger text-center\">El Usuario no existe o la contraseña es incorrecta</div>";
        } 

	
}else{
	view('login');
}


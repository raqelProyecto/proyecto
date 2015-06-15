<?php 
       try {

        $dsn = 'mysql:host=127.0.0.1;dbname=mydb';
    $usuario = 'root';
    $clave = ''; 
            $con = new PDO($dsn,$usuario, $clave);
        } catch (PDOException $e) {
          print "Error!". $e->getMessage()."<br/>";
          die();
         }           
    function consultaA($coneccion, $sql)
    {
      $ejecutor = $coneccion;
      $msgok = NULL;
      $msgerror = NULL;
      try {
          $condicion = strstr(trim($sql)," ", TRUE);
          switch ($condicion) 
          {
               case 'SELECT':
                 $msgerror = "No se encuentran datos";
                  $msgok = "Datos encotrados";
                 break;
              case "INSERT":
                  $msgerror = "No se ha Podido Insertar los Datos";
                  $msgok = "Datos Insertados";
                  
                  break;
              case "DELETE":
                  $msgerror = "No se ha Podido Eliminar los Datos";                  
                  $msgok = "Datos Eliminados";
                  break;
              case "UPDATE":
                  $msgerror = "No se ha Podido Actualizar los Datos";                  
                  $msgok = "Datos Actualizados";
                  break;
              default:
                  $msgerror = "Es posible que no use un estandar de consulta SQL";

                  break;
          }
          
          $ejecutor->beginTransaction();
          $fila = $ejecutor->exec($sql);
          $ejecutor->commit();
          
          if($fila == 0){
              $msgok = $msgerror."<br> No existe coincidencia para realizar la "
                      . "accion sobre los registros ";
          }
          
          return $msgok. " Filas Afectadas ".$fila ;
          
          
      } catch (Exception $exc) {
          $ejecutor->rollBack();
          return $msgerror. ":/<br>".$exc->getMessage(); 
      }
    }
    
    function consultaD($coneccion, $sql,$modo=2,$presentacion=FALSE)
    {
        $ejecutor = $coneccion;
        $manejador = trim($sql);
        $devolucion = "";
        try {       
            $datos = $ejecutor->query($manejador);
            //aun no se para que funciona

            $datos->setFetchMode($modo);
            if($presentacion == TRUE){
                $devolucion .="<table border=1>";
                foreach ($datos->fetchAll() as $registros) {
                    $devolucion.="<tr>";
                    foreach ($registros as $valor) {
                        $devolucion.="<td>".$valor."</td>";
                    }
                    $devolucion.="</tr>";
                }
                $devolucion .="</table>";
            }else{
              // funcion fetchAll no se que hace
                $contenedor = $datos->fetchAll(); 
                $devolucion=$contenedor;
                
                
            }
       
        } catch (Exception $exc) {
            return  "No se pudieron Consultar los Datos<br />".$exc->getMessage();  
        }        
        return $devolucion;
        
    }

    //codigo retomado de ejemplos proporcionados por el Ing.Jose Chavarria  
    
    function subirMedia($name){
        $nametmp = $_FILES["$name"]["tmp_name"];
        $destino = "../subir/img/".$_FILES["$name"]["name"];
        $destino1 = "../subir/vid".$_FILES["$name"]["name"];
        $tipo1="I";
        $tipo2 ="V";
        $tipo3= "Solo se admiten archivos de Imagen y Video";
        if( $_FILES["$name"]["type"]=="image/jpeg"){
        move_uploaded_file($nametmp,$destino);
        
        return $tipo1;
        }elseif($_FILES["$name"]["type"]=="video/MP4"){
        move_uploaded_file($nametmp,$destino1);
        echo "Video Súbida"; 
        return $tipo2;
        }else{
            if($tipo3){
                print "<div id='dialog-message' title='Error'>";
                print "<p><span class='ui-icon ui-icon-circle-close' style='float:left; margin:0 7px 50px 0;'></span>";
                print "No se han enviado datos :'(";
                print"</p><p><b><a href='../src/registrarNoticia.php'>volver a registrar noticia</a></b>.</p></div>";
             return $tipo1; 
            }
            
        }
        
    }
    //utilizo esta funcion para subir diferentes archivos mejor dicho diferentes tipos de imagenes y un solo formato de imagen
    //parametros la variable $name se pasa el valor del name del input
    //la variable var se le asigna 0 espara que nos retorne un mensaje mas adelante 
    //lo explicare
function subirMediaM($name,$var=0){

        $nametmp = $_FILES["$name"]["tmp_name"];
        $destino = "web/img/".$_FILES["$name"]["name"];
        $destino1 = "subir/vid".$_FILES["$name"]["name"];
        $tipo1="I";
        $tipo2 ="V";
        $tipo3= "Solo se admiten archivos de Imagen y Video";

        $tipoarch =$_FILES["$name"]["type"];
       //creo un switch para comparar los tipos si estos no son iguales alos que contengo en las casos se va al caso por defecto
        switch ($tipoarch) {
            case 'image/jpeg':
            move_uploaded_file($nametmp,$destino);
            return $tipo1;
            break;
            case 'image/jpg':
            move_uploaded_file($nametmp,$destino);
            return $tipo1;
            break;
            case 'image/png':
            move_uploaded_file($nametmp,$destino);
            return $tipo1;
            break;
            case 'image/jpe':
            move_uploaded_file($nametmp,$destino);
            return $tipo1;
            break;
            case 'image/gif':
            move_uploaded_file($nametmp,$destino);
            return $tipo1;
            break;
            case 'image/mov':
            move_uploaded_file($nametmp,$destino1);
            return $tipo2;
            break;
          
          default:
          //caso por defecto 
          //si el segundo parametro es diferente a 0 entonces retornara el valor que contiene la variable $tipo1
                print "<div id='dialog-message' title='Error'>";
                print "<p><span class='ui-icon ui-icon-circle-close' style='float:left; margin:0 7px 50px 0;'></span>";
                print "Solo se admiten archivos de Imagen y Video :'(";
                print"</p><p><b><a href='../src/registrarNoticia.php'>volver a registrar noticia</a></b>.</p></div>";
                if ($var==0) {
                  return $tipo3;
                }else{
                  return $tipo1;
                }
              
            break;
        }
        
            
        }

   function imprimirtabla($objeto,$form,$estilo="table",$editar=0){

     if ($objeto != NULL) {
          if (is_array($objeto)) {
               $tabla ="<table class=\"$estilo\">";
               $tabla .="<tr class='info'>";
               foreach (array_keys($objeto[0]) as $value) {
                    $tabla .="<td>";
                    $tabla .= $value;
                    $tabla .="</td>";
     
               }
               if ($editar != "0") {
                    $tabla .= "<td>Modificar</td>";
                    # code...
               }
               $tabla .="</tr><tr>";
               foreach ($objeto as $datos) {
                    foreach ($datos as $registros) {
                         $tabla .="<td>";
                         $tabla .=$registros;
                         $tabla .="</td>";
                         # code...
                    }
                    if ($editar != "0"){
                         $tabla .="<td><a href=".$form."Buscar&id=".$datos['id'].">Modificar</a></td>";
                                             }
                    $tabla.="</tr>";
                    # code...
               }
               $tabla .="</table>";
          }else{
               $tabla ="No hay registros que mostrar ";
          }
          # code...
     }else{
          $tabla= "Debe pasarse un Arreglo como Parametro ";
     }
     return $tabla;
}       



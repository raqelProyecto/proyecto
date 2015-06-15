<?php 

 if(isset($_REQUEST['btnA']))
    {
        require 'config/database.php';
        require 'models/voto.php';
        require 'models/modelVoto.php';
        $voto = new modelVoto();
         $voto->setIdCandidato($_REQUEST['id_candidato']);
         $voto->setVotanteId($_REQUEST['id_votante']);
        $voto->setAnio($_REQUEST['anio']);
         $objData = array($voto->getVotanteId(),
                          $voto->getIdCandidato(),
                          $voto->getAnio());
         $voto->agregarVoto($con,$objData);
        view('home');
        messageExito('Voto realizado con éxito');

    }else{
        require 'config/database.php';
  $sql = "select c.id as idcandidato, c.nombres, c.apellidos, p.src_img, p.nombre, t.tipo, t.anio 
          from candidato as c INNER JOIN partido as p ON c.partido_id = p.id 
          INNER JOIN tipoelec as t ON c.tipoElec_id = t.id 
          WHERE t.estado = 1 AND tipoElec_id = 2;";
               $objHoja = consultaD($con, $sql);
       
 view('hojaAlca', ['objHoja' => $objHoja]);
    }
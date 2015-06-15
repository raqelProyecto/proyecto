<?php

#echo "<pre>";
#print_r($objHoja);
#echo "</pre>";
    if(isset($_REQUEST['btn']))
    {
        require 'config/database.php';
        require 'models/voto.php';
        require 'models/modelVoto.php';
        $voto = new modelVoto();
         $voto->setIdCandidato($_REQUEST['id_candidato']);
          #$objId= array($voto->getIdCandidato());

         #$voto->agregarHoja($con, $objId);
        //Despues de haber insertado hacemos la consulta a la base de datos
        //cual es el valor maximo del id de la tabla hoja
       # $query = "select id from hoja where id =(select MAX(id) from hoja)";
        #$lastId = consultaD($con,$query);
        #foreach ($lastId as $data) {
         #   $maxId = $data['id'];
        #}

        #echo "<pre>";
        #print_r($lastId);
        #echo "</pre>";
        #if(empty($lastId)){
         #   $maxId = 1;
        #}
        #$voto->setHojaId($maxId);
        $voto->setVotanteId($_REQUEST['id_votante']);
        $voto->setAnio($_REQUEST['anio']);
         $objData = array($voto->getVotanteId(),
                          $voto->getIdCandidato(),
                          $voto->getAnio());
        print $voto->agregarVoto($con,$objData);
        view('home');
        messageExito('Voto realizado con éxito');

    }else{
        require 'config/database.php';
               $sql = "select c.id as idcandidato, p.src_img, p.nombre,  t.tipo, t.anio
               from candidato as c INNER JOIN partido as p
               ON c.partido_id = p.id INNER JOIN tipoelec as t
               ON c.tipoElec_id = t.id
               WHERE t.estado = 1 AND c.tipoElec_id = 1;";
        $objHoja = consultaD($con, $sql);
        view('hojaPres', ['objHoja' => $objHoja]);

    }



<?php
 if(isset($_REQUEST['btn']))
   {

       require 'models/candidato.php';
       require 'models/modelCandidato.php';
       require 'config/database.php';
       $sql1 ="SELECT * FROM partido";
       $datas = consultaD($con, $sql1);
       # segundo objeto
       $sql ="SELECT * FROM tipoelec";
       $datos = consultaD($con, $sql);


       $candidato = new modelCandidato();

       $candidato->setDui($_REQUEST['dui']);
       $candidato->setApellidos($_REQUEST['apellidos']);
       $candidato->setNombres($_REQUEST['nombres']);
       $candidato->setDpto($_REQUEST['dpto']);
       $candidato->setMunicipio($_REQUEST['municipio']);
       $candidato->setPatidoId($_REQUEST['partido_id']);
       $candidato->setTipoelecId($_REQUEST['tipoelec_id']);

       $objDatos = array($candidato->getDui(),
                         $candidato->getApellidos(),
                         $candidato->getNombres(),
                          $candidato->getDpto(),
                          $candidato->getMunicipio(),
                          $candidato->getPatidoId(),
                          $candidato->getTipoelecId()
           );

       $candidato->agregarCanditado($con, $objDatos);
       view('inscripcionCan', ['partido' => $datas, 'tipo' => $datos]);
       messageExito('Candidato Registrado');
   }else{
     require 'config/database.php';
     $sql1 ="SELECT * FROM partido";
     $datas = consultaD($con, $sql1);
     # segundo objeto
     $sql ="SELECT * FROM tipoelec";
     $datos = consultaD($con, $sql);
     $arreglo = ['partido' => $datas, 'tipo' => $datos];
     #echo '<pre>';
     #print_r($arreglo);
     #echo '</pre>';
    view('inscripcionCan',['partido' => $datas, 'tipo' => $datos]);

     #foreach ($arreglo['partido'] as $array):
      #   echo $array['nombre'];
     #endforeach;

 }

<?php require 'views/layout/header.php'; ?>
<!--requerimos el encabezado-->
<!--body-->
    <div class="container">
         <div class="starter-template">
             <h1>Tú Voto <span class="glyphicon glyphicon-erase" aria-hidden="true">
                           </span>
             </h1>
             <p class="lead">Elección de <?= $objHoja[0]['anio'];?>.<br>
                 Diputados
                 <span class="glyphicon glyphicon-arrow-down" aria-hidden="true">
                    </span>
             </p>
         </div>
               
                      <div class="panel panel-warning">
                          <div class="panel-heading">
                            <h3 class="panel-title text-center">Élige</h3>
                          </div>
<div class="panel-body">
  <form class="form-horizontal" method="POST">
   <input type="hidden" name="id_votante" value="<?= $_REQUEST['votante_id']?>" />
   <input type="hidden" name="anio" value="<?= $objHoja[0]['anio'];?>"/>
    <div class="row">
      <?php foreach ($objPart as $datosp): ?>
            <div class="col-md-2">
                  <img src="web/img/<?= $datosp['src_img']; ?>" class='img-circle text-center' style='width:100px; height:100px;'/>
                     <p class="text-warning text-center">
                      <?= $datosp['nombre'] ?> </br>
                  </p>
               <?php foreach ($objHoja as $datosc): ?>
                    
                    <?php if ($datosp['id']==$datosc['id']): ?>

                      <p>
                        <div class="radio">
                         <label>
                          <input type="radio" name="id_candidato" id="blankRadio1" value="<?= $datosc['idcandidato'];?>" aria-label="" >
                           <?= $datosc['nombres'].'&nbsp'.$datosc['apellidos']?></br>
                         </label>
                        </div>
                      </p>
                         
                    <?php else: ?>
                        
                    <?php endif ?>

               <?php endforeach ?>
            </div>
               <?php endforeach ?>
               <div class="row">
                   <button type="submit" name="btnD" class="btn btn-info">Enviar Voto</button>
               </div>
               
   </form>
             
  </div>
</div>

           
       
        </div>
    </div>
    <!--Cierre de body-->

    <!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>
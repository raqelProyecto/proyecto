<?php require 'views/layout/header.php'; ?>
<!--requerimos el encabezado-->
<!--body-->


    <div class="container">

            <div class="starter-template">
               <h1>Tú Voto <span class="glyphicon glyphicon-erase" aria-hidden="true">
                           </span>
               </h1>
                <p class="lead">Elección de <?= $objHoja[0]['anio'];?>.<br>
                    Precidenciales
                    <span class="glyphicon glyphicon-arrow-down" aria-hidden="true">
                    </span>
                </p>
            </div>

                 <div class="panel panel-warning">
                   <div class="panel-heading">
                     <h3 class="panel-title text-center">
                       Élige
                     </h3>
                   </div>
                   <div class="panel-body">
                      <form "form-horizontal" method="post" action="hojaPresidente">
                      <input type="hidden" name="id_votante" value="<?= $_REQUEST['votante_id']?>"/>
                       <input type="hidden" name="anio" value="<?= $objHoja[0]['anio'];?>"/>
                        <div  class="row">
                        <div class="col-xs-3">
                          60260918
                        </div>
    <?php foreach ($objHoja as $data):?>
              <div class="col-xs-4">
                  <img src="web/img/<?= $data['src_img']; ?>" class='img-circle' style='width:100px; height:100px;'/>
                    <div class="radio">
                      <label>
                      <input type="radio" name="id_candidato" id="blankRadio1" value="<?= $data['idcandidato'];?>" aria-label="" >
                       <?= $data['nombre'] ?>
                      </label>
                    </div>
              </div>
    <?php endforeach; ?>
                        </div>
             <div class="text-center">
                <button type="submit" name="btn" class="btn btn-info">Enviar Voto</button>
             </div>
                      </form>
                   </div>
                 </div>


    </div><!-- /.container -->



<!--Cierre de body-->

<!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>
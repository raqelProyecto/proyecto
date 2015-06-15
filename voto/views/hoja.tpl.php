<?php require 'views/layout/header.php'; ?>
<!--requerimos el encabezado-->
<!--body-->
    <div class="container">
         <div class="starter-template">
             <h1>Tú Voto <span class="glyphicon glyphicon-erase" aria-hidden="true">
                           </span>
             </h1>
             <p class="lead">Élige<br>
                 Qué tipo de Votación quieres iniciar?<br>
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
  <?php foreach ($objHoja as $key): ?>
     <a class="btn btn-default text-center" href="hoja<?= $key['tipo']?>&votante_id=<?= $datos[0]['id']?>">Hoja <?= $key['tipo']?></a>
  <?php endforeach ?>
   

   </form>
             
  </div>
</div>

           
       
        </div>
    </div>
    <!--Cierre de body-->

    <!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>
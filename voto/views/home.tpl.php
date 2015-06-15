<?php require 'views/layout/header.php'; ?>
<!--requerimos el encabezado-->
<!--body-->


    <div class="container">

      <div class="starter-template">
        <h1>Tú Voto <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></h1>
        <p class="lead">Dígita tu número de DUI para poder realizar tu votó.<br> 
        Aquí <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></p>
        
          
       
        
      </div>
      <div class="row">
        <div class="col-md-6">
        <img src="web/img/dui.png" class="img-rounded"></div>

         <div class="col-md-6">
           <form class="form-horizontal" name="f" method="POST">
             <div class="form-group">
                <label for="DUI" class="control-label">DUI: </label>
                 
                 <input type="text" maxlength="10" name="dui" class="form-control" id="DUI" placeholder="XXXXXXXX-X">

                 
             </div>
             <div id="alert"></div>
              <div class="form-group">
                <a  id="pregunta" class="btn btn-info" href=javascript:mostrar()>Mostrar Teclado</a>
              </div>
              
                <div align="center" id="botones" style="font:normal 16px/8px verdana;visibility:hidden;" ></div>
              <input type="submit" name="btn" value="Siguiente" class="btn btn-default" onclick="testInfo(document.getElementById('DUI'));"/>
             <!--<button type="submit" name="btn" class="btn btn-default" onclick="testInfo(document.getElementById('DUI'));">Siguiente</button>-->
            <!-- <a href="hoja" class="btn btn-default">Siguiente</a>-->
           </form>
         </div>

      </div>


    </div><!-- /.container -->

<script>

    texto="";

     var Tletras=new Array ("0","1","2","3","4","5","6","7","8","9");
     var z=0;
     var Numero=true



     function anadir(letra)
     {

      texto=document.f.dui.value;
        if(letra=="\b")
        {
              numeroLetras=texto.length-1
              texto=texto.substring(0,numeroLetras);
        }
        else{
              if(!Numero)
              {
                letra=letra.toLowerCase()
              }
              
               texto=texto+letra;
            }

           document.f.dui.value=texto;
     }


          function mostrar()
          {
           if (z==0)
            {z=1;
                
                document.getElementById('botones').style.visibility="visible";pregunta.innerHTML="Ocultar teclado";
            }
             else{z=0;
               document.getElementById('botones').style.visibility="hidden";pregunta.innerHTML="Mostrar teclado";
                 }
          }

</script>

<script>
    var c="0";
    var letras="";
    var p=0;
    for (a=0;a<Tletras.length;a++){
        letras=letras+"<input  class='btn btn-default' type='Button' value="+Tletras[a]+" onclick=anadir('"+Tletras[a]+"')>&nbsp;";
        p=p+1;
        if (p%3==0) { letras = letras+ "<br>";};
       if(p==10)
        {p=0;letras=letras+"<br><br>";
      }
    }

document.getElementById('botones').innerHTML=letras+"<input class='btn btn-default' alt='Borrar' type='Button' value=&laquo; onClick=anadir('\b')></input>";
   
</script>

<script type="text/javascript">  
      var re = /^\d{8}-\d{1}$/;  
      function testInfo(DUIInput,e){  
        var OK = re.exec(DUIInput.value);  
        if (!OK)
          
          document.getElementById('alert').innerHTML = "<div class = 'alert alert-danger'><strong>Revisé el formato de su DUI</strong></div>" ;
          
        else

          window.alert("DUI Correcto: " + OK[0]);  
          
      }  
</script>
<!--Cierre de body-->

<!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>
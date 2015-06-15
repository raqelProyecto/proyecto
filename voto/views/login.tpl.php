<?php require 'views/layout/header.php'; ?>
<!--requerimos el encabezado-->
<!--body-->


    <div class="container">
<form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Por favor Digite sus datos de Administrador <span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2>
        <label for="userName" class="sr-only">Nombre de usuario</label>
        <input type="email" name="correo" id="userName" class="form-control" placeholder="Nombre de usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <!--<a href="admin" class="btn btn-lg btn-primary btn-block">Iniciar sesión</a>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="bot">Iniciar sesión</button>
  </form>
         </div>

      </div>


    </div><!-- /.container -->



<!--Cierre de body-->

<!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>
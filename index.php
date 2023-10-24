<?php
require 'inc/header.php';

?>

     <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!--imagen  perro-->
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <!--formulario del login-->
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">  </h1>
                                <h5>LOGIN DEL USUARIO</h5>
                            </div>
                            <form class="user" >
                                <div class="form-group">
                                    <input type="TEXT" class="form-control form-control-user"
                                        id="nombreUsuario" name="nombreUsuario" aria-describedby="emailHelp"
                                        placeholder="Ingresar Usuario...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="password" name="password" placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                    </div>
                                </div>
                                
                                <a href="post.php" class="btn btn-primary btn-user btn-block">
                                
                                    Iniciar Secciòn
                                </a>
                                
                                <hr>
                        
                            </form>
                           
                            
                            <div class="text-center">
                                <a class="small" href="registro.php">Registrar cuenta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
    

<?php
require 'inc/footer.php';
?>
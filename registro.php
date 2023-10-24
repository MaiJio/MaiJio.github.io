<?php
require 'inc/header.php';
?>
<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registro de Usuario</h1>
                            </div>

                            <form class="user">
                                <div class="form-group row">

                                <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nickname"
                                            placeholder="Ingresar su nicknombre" name="nickname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nombre"
                                        placeholder="Ingrese su nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="correoElectronico"
                                        placeholder="Ingrese su correo" name="correoElectronico">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="contraseña"
                                            placeholder="contraseña" name="contraseña">
                                    </div>
                                    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="fechaRegistro"
                                            placeholder="Fecha de Registro" name="fechaRegistro">
                                    </div>

                                </div>
                                
                               
                                <a href="post.php" class="btn btn-primary btn-user btn-block">
                                    Registrar usuario
                                    
                                </a>


                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
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
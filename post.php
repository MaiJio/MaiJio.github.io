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
                                <h5>...</h5>
                            </div>
                            <h2>Publicar un Artículo</h2>
                            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                <label for="titulo">Título:</label>
                                <input type="text" name="titulo" required><br><br>
                                </div>

                            <div class="col-xl-10 col-lg-12 col-md-9">
                                <label for="contenido">Contenido:</label>
                                <textarea name="contenido" rows="4" cols="40" required></textarea><br><br>

                                <label for="autor">Autor:</label>
                                <input type="text" name="autor" required><br><br>

                                <input type="submit" value="Publicar">
                            </form>
                            <hr>
                            
                            <div class="text-center">
                                <input type="submit" value="Salir">
                            </div>

                            </div>
</hr>
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
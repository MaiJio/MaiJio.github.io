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
                            
                            <h2>Publicar un Comentario</h2>
                            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
                            <div class="col-xl-10 col-lg-12 col-md-9">
                                <label for="comentario">Comentario:</label>
                                <textarea name="comentario" rows="4" cols="30" required></textarea><br><br>
                            </div>
                                <label for="imagen">Imagen:</label>
                                <input type="file" name="imagen" accept="image/*" required><br><br>
                            <div class="text-center">
                                <input type="submit" value="Publicar">
                            </div>
                            </form>
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
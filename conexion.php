<?php
                              
                               
                             


function conectar (){

    $user="root";
    $pass="adriana";
    $server="localhost";
    $db="db_blog";
    $conection = mysqli_connect("localhost","root","adriana","db_blog");
    if(!$conection){
        echo "error al conectarse con la base de datos.";
        echo mysqli_connect_errno()."<br>";
        echo mysqli_connect_error()."<br";
    } 
   $resultado = mysqli_query($conection,"SELECT * FROM usuario");

    while($row = mysqli_fetch_assoc($resultado)){
        $id = $row['idUsuario'];
        $nickname = $row['nickname'];
        $nombre = $row['nombre'];
        $correoElectronico = $row['correoElectronico'];
        $contraseña = $row['contraseña'];
        $fechaRegistro = $row['fechaRegistro'];

        echo "$id - $nickname - $nombre - $correoElectronico - $contraseña - $fechaRegistro <br>";
    }

    while($row = mysqli_fetch_row($resultado)){
        $id = $row[0];
        $nickname = $row[3];
        $nombre = $row[3];
        $correoElectronico = $row[4];
        $contraseña = $row[4];
        $fechaRegistro = $row[5];
       
        echo "$id - $nickname - $nombre - $correoElectronico - $contraseña - $fechaRegistro <br>";
    }

    
   
}

?>                           
                             

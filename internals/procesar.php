<link rel="stylesheet" type="text/css" href="css/style.css">
<?php

    include("../dll/config.php");
    include("../dll/class_mysql.php");
    $miconexion= new class_mysqli();
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    //extract($_POST);
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    //$cedula=$_POST['cedula'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $fechaNacimiento=$_POST['fechaNacimiento'];
    $correo=$_POST['correo'];

    $sql="insert into personal values ('','$nombres','$apellidos','$correo','$telefono','$direccion','$fechaNacimiento')";
    $resSql = $miconexion->consulta($sql);

    //$sql="delete from personal where id=3";

    //$sql="update personal set nombres='Angelita', apellidos='Carrion' where id=1";
    //$resSql = mysqli_query($conexion, $sql);

    if($resSql){
        echo "Sus datos se registraron";
    }
    else{
        echo "Error.. Problemas de sql";
    }
    
?>
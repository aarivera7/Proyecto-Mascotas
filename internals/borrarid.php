<?php

    include("../dll/conexion.php");

    $idPersonal = $_POST['idpersonal'];

    $sql = "delete from personal where id = $idPersonal";

    $resSql = mysqli_query($conexion, $sql);

    if($resSql){
        echo '<script>alert("Sus datos se eleiminaron correctamente..");</script>';
        echo "<script>location.href='../'</script>";
    }
    else{
        echo "Error.. Problemas de sql";
    }
    
?>
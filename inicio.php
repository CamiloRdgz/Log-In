<?php

    session_start();
    /* if(!isset($_SESSION["nombre"])) {
        header("location: inicio.php");
    } */

    $usuario = array();

    // Users stored in the system's DB
    $usuario[0] = "nico;1234;1";
    $usuario[1] = "pepe;4321;2";

    // Users joining the system
    
    $user = "";
    $cont = "";

    if(isset($_GET["user"])) {
        $user = $_GET["user"];
    }

    if(isset($_GET["cont"])) {
        $cont = $_GET["cont"];
    }

    // Validation
   

    for($i=0;$i<count($usuario);$i++) {
        $u = explode(";",$usuario[$i]);

        if($u[0] == $user && $u[1] == $cont) {
            $_SESSION["nombre"] = $u[0];
            $_SESSION["rol"] = $u[2];
            echo "
            <script>
                window.alert('Bienvenido')
            </script>
            ";
            header("location: casa.php");
            break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Inicio de Sesión</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <br><br><br>
    <main>
        <div class="container-fluid">
            <form action="inicio.php" method="get">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="cont">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>
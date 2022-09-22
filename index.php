<!-- Index Source -->
<?php
    // Initializing Session to create Super Global variables
    session_start();
    // Verify is user has been already join page
    if(isset($_SESSION['user'])) {
        header("location: home.php");
    }

    // Users stored in the system's DB
    $usuario = array();
    $usuario[0] = "nico;1234;1";
    $usuario[1] = "pepe;4321;2";

    // Recuperation of User datas
    if(isset($_GET["user"]) && isset($_GET["pass"])) {
        // Users joining the system
        $user = $_GET["user"];
        $pass = $_GET["pass"];

        // Validation of User datas
        for($i=0;$i<count($usuario);$i++) {
            $u = explode(";",$usuario[$i]);
            if($u[0] == $user && $u[1] == $pass) {
                $_SESSION["user"] = $u[0];
                $_SESSION["rol"] = $u[2];
                $validation = True;
                header("location: home.php");
                break;
            }
        }
        // echo"
        // <script>
        //     window.alert('Bruh, Something in your data is wrong');
        // </script>
        // ";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" passent="IE=edge">
    <meta name="viewport" passent="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Session Start</title>
</head>

<body>
    <?php
        include "header.php";
    ?>
    <main>
        <br><br><br>
        <div class="passainer-fluid">
            <form action="index.php" method="get">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <?php
            include "footer.php";
        ?>
    </main>
</body>

</html>
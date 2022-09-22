<!-- Casa Source -->
<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header("location: index.php");
    }
    echo "
    <script>
        window.alert('Welcome to your home page ".$_SESSION['user']." :)')
    </script>";
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
    <link rel="stylesheet" href="CSS/style.css">
    <title>Home Page</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <main>
        <br><br><br>
        <h1>This is your own Home Page</h1>
        <p>This text is here as a test</p>
        <a class="logout" href='logout.php'>Cerrar Sesion</a>
        <?php
            include "footer.php";
        ?>
    </main>
</body>
</html>
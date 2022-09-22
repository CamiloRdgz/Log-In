<!-- Routine logout Source -->
<?php
    session_start();
    unset($_SESSION["user"]);
    unset($_SESSION["rol"]);
    session_destroy();

    header("location: index.php");
?>
<?php
    session_start();
    $page = "login";
    include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION["ADMIN"] = "Admin";
        $_SESSION["TESTER"] = "Tester";
    ?>
    <button type="button" id="admin">Login as Administrator</button>
    <button type="button" id="tester">Login as Tester</button>
</body>
<script src="script.js"></script>
</html>
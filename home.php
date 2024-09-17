<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>home page</h1>
    <br>
    <?php
        if (isset($_SESSION["ddd"])) {
            echo $_SESSION['ddd'];
            unset($_SESSION['ddd']);
        }
        
        ?>
        <br>
    <a href="subg.php">submit in ghost mode</a>
    <br>
    <a href="subn.php">submit in normal mode</a>
</body>
</html>
<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <p>username</p>
    <input type="text" placeholder="username" name="username">
    <p>Password</p>
    <input type="password" placeholder="password" name="password">
    <br>
    <input type="submit" name="submit" value="login">
    </form>

    <p>not have a account</p>
    click here to <a href="usn.php">sign in</a>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    
    $name =  $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM signn WHERE
    username = '$name' AND
    password = '$pass'
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $count = mysqli_num_rows($res);

    if($count==1){
        header("location:" . HOMEURL . 'home.php');

}
}
?>

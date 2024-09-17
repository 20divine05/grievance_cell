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
    username:
   <input type="text" name="username">
  
<br>



   
    password:
    <input type="text" name="password">
<br>

    <input type="submit" name="submit" value="creat account">
    
    </form>
</body>
</html>
<?php 
if (isset($_POST["submit"])) {
    
    $name =  $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO signn SET
    username = '$name',
    password = '$pass'
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
     
    if($res==true){
        $_SESSION['add'] = "<div class='ld'> added succefully</div>";
        header("location:" . HOMEURL . 'log.php');
    }
}
?>
<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<?php 
    if (isset($_SESSION["login"])) { //checking whether the session is set or not
        echo $_SESSION['login']; //displaying the session message if set
        unset($_SESSION['login']); //remove session message
    }
    
    ?>
<form action="" method="POST">
    usn:
   <input type="text" name="usnnum">
   <br>
    
    <input type="submit" name="submit" value="submit">
    
    </form>
</body>
</html>
<?php 
if (isset($_POST["submit"])) {
    
    $username =  $_POST['usnnum'];
    

    $sql = "SELECT * FROM usnn WHERE
    usnnum = '$username' 
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    $count = mysqli_num_rows($res);

     
    if($count==1){
       
        header("location:" . HOMEURL . 'sign.php');
    }else{
                $_SESSION['login'] = "<div class='error text-align'>enter valid usn</div>";
                header("location:" . HOMEURL . 'usn.php');



    }
}
?>
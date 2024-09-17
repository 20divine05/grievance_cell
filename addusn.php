<?php include("config.php");?>
<html >
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="stt.css">
</head>
<body>

    <?php 
    if (isset($_SESSION["add"])) { //checking whether the session is set or not
        echo $_SESSION['add']; //displaying the session message if set
        unset($_SESSION['add']); //remove session message
    }
    
    ?>

    <form action="" method="POST">
    usn:
   <input type="text" name="usnnum">
  




   
    name:
    <input type="text" name="namee">

    <input type="submit" name="submit" value="submit">
    
    </form>
</body>
</html>
<?php 
if (isset($_POST["submit"])) {
    
    $username =  $_POST['usnnum'];
    $password = $_POST['namee'];

    $sql = "INSERT INTO usnn SET
    usnnum = '$username',
    namee = '$password'
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
     
    if($res==true){
        $_SESSION['add'] = "<div class='ld'> added succefully</div>";
        header("location:" . HOMEURL . 'addusn.php');
    }
}
?>

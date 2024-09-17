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
        <input type="text" name="name">
        <br>
        branch:
        <input type="text" name="branch">
        <br>
        usn:
        <input type="text" name="usn">
<br>


        your complaint:
        <br>
        <pre><textarea name="complaint"  cols="30" rows="10"></textarea></pre>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    
    $username =  $_POST['name'];
    $branch = $_POST['branch'];
    $usn = $_POST['usn'];
    $complaint = $_POST['complaint'];

    $sql = "INSERT INTO compnc SET
    name = '$username',
    branch = '$branch',
    usn = '$usn',
    complaint = '$complaint'
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
     
    if($res==true){
        $_SESSION['ddd'] = "<div class='ld'> complaint registered succefully</div>";
        header("location:" . HOMEURL . 'home.php');
    }
}
?>
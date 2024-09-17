<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    complaints:
    <?php 
    $sql = "SELECT * FROM complaintg";
            //Excute the query
            $res = mysqli_query($conn, $sql);

            if ($res == TRUE) {
                //count rows to check wether we have data in database
                $count = mysqli_num_rows($res);
                $sn=1;
               //create a varaible and assign the value
                //check the number of rows
                if ($count > 0) {
                    
                    //we have data in database
                    while ($rows = mysqli_fetch_assoc($res)) {
                        //using whilw loop to get all the data from database
                        //and while loop run aslong as we have data in database
            
                        //get individual data
                        $id = $rows["id"];
                        $complaint = $rows["complaint"];
                        

                        //display the values in our table
                        ?>
                        <table>
                         <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><pre><?php echo $complaint; ?></pre></td>
                            

                            </tr>
                            </table>
                        <?php
                        
                            
                        
                    }
                }else{
                    echo "lion";
                }
            }
            ?>
</body>
</html>
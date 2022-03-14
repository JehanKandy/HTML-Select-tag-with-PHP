<?php
    include("config.php");

    $sql = "SELECT * FROM student";
    $result = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Test</title>

    <!-- use Bootstrap style for html file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <center>
        <h1>Using HTML Select tag with mysql table data using PHP</h1>
        <br>
        <hr width="50%"><br><br>
        <form action="" method="post">
            <select name="test" class="form-cotrol">
                <option value="select_empty">---SELECT---</option>

                <?php 
                    while($row = mysqli_fetch_assoc($result)){
                ?>

                <option value="<?php $row['name']?>"><?php echo($row['name']); ?></option>
                <?php

                    }
                
                
                ?>
                
            </select>
        </form>
                    <br><br><br><br><br>
        <h4>
            Thank you for learn this
        </h4>
        <h2>
            Developed By : JehanKandy
        </h2>
        <h3>
            on 14 / 03 / 2022
        </h3>
    </center>
    



<!-- use Bootstrap js for html file
    Download from https://getbootstrap.com/docs/4.0/getting-started/introduction/

-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
 session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated</title>
</head>
<body>
    <div class="button"><a href="index.php">Back</a>

        <?php

       

        if (isset($_SESSION['numberLength'])) {
            echo $_SESSION['numberLength'];
        }

        
        ?>


    </div>
</body>
</html>
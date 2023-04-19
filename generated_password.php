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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>La Password generata è :</h2>
        <p class="password">
            <?php
        
        
            if (isset($_SESSION['numberLength'])) {
                echo $_SESSION['numberLength'];
            }
        
            ?>
        </p>
        <div class="button"><a href="index.php">Back</a> </div>
    </div>
    
</body>
</html>
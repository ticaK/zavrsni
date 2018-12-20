<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "vivify";
    $dbname = "blog";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>

<!DOCTYPE html> 
    <html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Moj blog</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css" >



    </head>

    <body>
    <?php 
        
        $id = $_POST['id'];
        $ch = $_POST['che'];
    
        if ($ch === "true") { 

                $sql = "DELETE FROM comments WHERE post_id = '$id'";
                $connection->exec($sql);
                $sql1 = "DELETE FROM posts WHERE id = '$id'";
                $connection->exec($sql1);
                header('Location:http://localhost:8000');
        }

        else {
            header('Location:http://localhost:8000/single-post.php?post_id=' . $id );
        }
        

        $connection = null;


    ?>
    </body>
</html>

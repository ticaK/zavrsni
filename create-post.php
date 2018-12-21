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

        <title>Moj Blog</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <link rel="stylesheet" href="styles/styles.css" >

    </head>

    <body>
        <?php 

            $title = $_POST['title'];
            $author = $_POST['author'];
            $text = $_POST['post-content'];
            $date = date("Y-m-d H:i:s");

            if($title && $author && $text && $date) {
                $sql = "INSERT INTO posts (title, body, author, created_at) VALUES ('$title','$text', '$author', '$date')";
                $connection->exec($sql);
                header('Location:http://localhost:8000'); //vraca na home stranicu                           
            } 
                
            $connection = null;
                
        

        ?>
    </body>

</html>

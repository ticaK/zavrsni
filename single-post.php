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

    <title>Vivify Blog</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">

    

    
</head>

<body>
    <?php include('header.php'); ?>

    <main role="main" class="container">

    <div class="row">
        <div class="col-sm-8 blog-main">
        <?php

            if (isset($_GET['post_id'])) {
                $sql2 = "SELECT * FROM posts WHERE posts.id = {$_GET['post_id']}";
                $statement = $connection->prepare($sql2);
                $statement->execute();
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                $singlePost = $statement->fetch();
        ?>
            
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo $singlePost['title'] ?></a></h2>
                    <p class="blog-post-meta"><?php echo $singlePost['created_at'] ?> by <a href="#"><?php echo $singlePost['author'] ?></a></p>
                    <p><?php echo $singlePost['body']?> </p>
                </div>


                <form class = "delete-post" method = "post" action = 'delete-post.php' onsubmit = check() > 
                    <input type = 'hidden' name = 'che' id = 'ch'>
                    <input type = 'hidden' name = 'id' value = "<?php echo $singlePost['id'] ?>">
                    <button type = "submit" class = "btn btn-primary" name = 'postDelete'>Delete this post</button>
                </form><br><br>
                

                <form  name = 'commentForm' action = "create-comment.php" onsubmit = "return validateForm()" method = "post">
                    <label >Author:</label><br>
                    <input type = "text" name = "author" ><br><br>
                    <label> Comment:</label><br>
                    <textarea cols = "55" rows = "5" name = "text" placeholder= "Add comment..."></textarea><br>
                    <input type="hidden" name="IdPosta" value="<?php echo $singlePost['id'] ?>" /><br>
                    <input type = "submit"  name = "submit" value ="Submit">
                </form>

                <br><p id ="warning"></p><br>

                <?php include('comments.php')?>
                

            <?php
            } else {
                echo('post_id nije prosledjen kroz $_GET');
            }
            ?>
        </div>
        <?php include('sidebar.php'); ?>

    </div>

</main>

<?php include('footer.php')?>
</body>
<script src = "main.js"></script>
</html>

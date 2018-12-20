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

        <link rel="stylesheet" href="styles/blog.css">
        <link rel="stylesheet" href="styles/styles.css">

    </head>

    <body>
        <?php 
            include('header.php');
        ?>

           <main role="main" class="container">
                
                <div class="create-post-page">
                        <h1>Add new post</h1>
                </div>

                <form name = "createForm" action = "create-post.php"  onsubmit = "return validateForm1()" method = "post">
                    <div class = "form-group">
                        <label class = "control-label">Post title</label>
                        <input type = "text" name = "title" class = "form-control">
                    </div>

                    <div class="form-group">
                        <label class = "control-label">Author</label>
                        <input type = "text" name = "author" class = "form-control">
                    </div>

                    <div class = "form-group">
                        <label class = "control-label">Post content</label>
                        <textarea rows = "10"  name = "post-content" class = "form-control"></textarea>
                    </div>
                    
                    
                    <div class = "form-group">
                        <input type = "submit" name = "submit" value = "Submit">  
                    </div>
                </form>

                <p id = "post-warning"></p> <br>
                
            </main>



        <?php
            include('footer.php');
        ?>

    </body>

<script src = "main.js"></script>
</html>

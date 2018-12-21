
<button class = "btn btn default" onclick="hideComments()"> Hide comments</button>  <br><br>

<div class = "comments">

    <h4>All comments</h4>

    <?php

        $sqlComments =
        "SELECT *, posts.id as id, comments.id as cid,
        COALESCE(comments.author, posts.author ) as author
        FROM comments JOIN posts ON comments.post_id = posts.id
        WHERE comments.post_id = {$_GET['post_id']}";
        
        $statement = $connection->prepare($sqlComments);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $comments = $statement->fetchAll();

            foreach ($comments as $comment) {
    ?>
                <div class="single-comment">
                    <ul>
                        <li><div>posted by: <strong><?php echo $comment['author'] ?> </strong></div>
                            <div> <?php echo $comment['text'] ?> </div>

                                <form class = "delete-form" method = "post" action = 'comment-delete.php'>
                                    <input type = "hidden" name = "cid" value = "<?php echo $comment['cid'] ?>"/>
                                    <input type = "hidden" name="postId" value="<?php echo $singlePost['id'] ?>"/>
                                    <button type = "submit" class = "btn btn-default" name = 'commentDelete' >Delete</button>
                                </form>

                                <hr>
                        </li>
                    </ul>

                </div>
            <?php } ?>

    
</div>


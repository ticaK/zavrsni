
<button class = "btn default" onclick="hideComments()"> Hide comments</button>  <br><br>

    <div class = "comments">
                <h3>All comments</h3>
                <?php
                    $sqlComments =
                    "SELECT *, posts.id as id, comments.id as cid,
                    COALESCE(comments.author, posts.author ) as author
                    FROM comments  JOIN posts ON comments.post_id = posts.id
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
                                        <hr>
                                    </li>
                                </ul>

                            </div>
                        <?php } ?>
    </div>
                       
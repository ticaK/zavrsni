<aside class="col-sm-3 ml-sm-auto blog-sidebar">

    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts</h4>
        <?php
            $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5";
            $statement = $connection->prepare($sql);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $titles = $statement->fetchAll();

            foreach ($titles as $title) {
        ?>

            <p><a href = "single-post.php?post_id=<?php echo $title['id']?>"><?php echo $title['title'] ?></a></p>

        <?php } ?>
        
    </div>
    
</aside>
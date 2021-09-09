<main class="right">
    <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
    <h2 class="right__title">Latest News</h2>
    <div class="posts">
        <?php foreach($postList as $postId => $postData): ?>

        
        <?php 
            // La premiere boucle $postId = 1
            // $postData[$postId] ==> $postData[1]
            // var_dump($postData[$postId]);
        ?>

        <article class="post">
            <a href="" class="post__category post__category--color-<?= $postData['category'] ?>">
                <?= $postData['category'] ?>
            </a>
            <h3>
                <?= $postData['title'] ?>
            </h3>
            <div class="post__meta">
                <img class="post__author-icon" src="../images/<?= $postData['author_image'] ?>" alt="">
                <strong class="post__author">
                    <?= $postData['author'] ?>
                </strong>
                <time datetime="<?= $postData['datetime'] ?>">
                    <?= $postData['publication_date'] ?>
                </time>
            </div>
            <p><?= $postData['summary'] ?></p>
            <!-- 
            article.php?id=1, article.php?id=2, ... article.php?id=8
            -->
            <a href="article.php?id=<?=$postId ?>" class="post__link">Continue reading</a>
        </article>
        <?php endforeach; ?>
    </div>
</main>
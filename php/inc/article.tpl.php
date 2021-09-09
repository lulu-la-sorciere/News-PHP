
      <main class="right">
        <h2 class="right__title">
          <?php // echo $articleData['title']; ?>
          <?= $articleData['title'] ?>
        </h2>
        <div class="posts">
          <div class="post post--solo">
            <a href="" class="post__category post__category--color-<?= $articleData['category'] ?>">
              <?= $articleData['category'] ?>
            </a>
            <div class="post__meta">
              <img class="post__author-icon" src="../images/<?= $articleData['author_image'] ?>" alt="">
              <strong class="post__author">
                <?= $articleData['author'] ?>
              </strong>
              <time datetime="<?= $articleData['datetime'] ?>"><?= $articleData['publication_date'] ?></time>
            </div>
            <p class="single">
              <?= $articleData['text'] ?>
            </p>
            <a href="./index.php" class="post__link">back to home</a>
          </div>
        </div>
      </main>
    
<!doctype html>
<html lang="ru">
<?php require_once 'elems/head.php'?>
<body>

<?php require_once 'elems/header.php'?>

<main>
    <section class="posts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Around the University</h2>
                </div>
            </div>
            <div class="row">
                <?php

                foreach ($content_post as $post){ ?>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="posts-block">
                            <div class="posts-block-img"><img src="../../img/posts/<?=$post['img']?>" alt=""></div>
                            <div class="posts-block-content">
                                <div class="posts-block-title"><?=$post['title']?></div>
                                <div class="posts-block-prev"><?=$post['content']?></div>
                                <a href="" class="posts-block-link">Keep reading...</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </section>
</main>

<?php require_once 'elems/footer.php'?>

</body>
</html>


<article class="uk-article">

    <h1 class="uk-article-title"><?= $post->getTitle() ?></h1>

    <?= $post->getContent() ?>

    <?= $view->render('blog:views/site/comments.php') ?>

</article>

<?php

// get theme configuration
include(__DIR__.'/template.config.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('jquery') ?>
        <?php $view->script('uikit') ?>
    </head>
    <body>

        <?php if ($view->position()->exists('logo') || $view->menu()->exists('main')) : ?>
        <div class="tm-navbar">
            <div class="uk-container uk-container-center">

                <nav class="uk-navbar">

                    <?php if ($view->position()->exists('logo')) : ?>
                    <a class="uk-navbar-brand uk-hidden-small" href="<?= $view->url()->get() ?>">
                        <?= $view->position('logo') ?>
                    </a>
                    <?php endif ?>

                    <?php if ($view->menu()->exists('main')) : ?>
                    <div class="uk-navbar-flip uk-hidden-small">
                        <?= $view->menu('main', 'menu-navbar') ?>
                    </div>
                    <?php endif ?>

                    <?php if ($view->position()->exists('offcanvas')) : ?>
                    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                    <?php endif ?>

                    <?php if ($view->position()->exists('logo-small')) : ?>
                    <a class="uk-navbar-brand uk-navbar-center uk-visible-small" href="<?= $view->url()->get() ?>">
                        <?= $view->position('logo-small') ?>
                    </a>
                    <?php endif ?>
               
                </nav>

            </div>
        </div>
        <?php endif ?>

        <?= $view->render('messages') ?>

        <?php if ($view->position()->exists('top')) : ?>
        <div id="tm-top" class="tm-top uk-block">
            
            <?php if (1) : ?>
            <div class="uk-container uk-container-center">
            <?php endif; ?>

                <section class="uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                    <?= $view->position('top', 'grid') ?>
                </section>
            
            <?php if (1) : ?>
            </div>
            <?php endif; ?>

        </div>
        <?php endif; ?>





        <div id="tm-main" class="tm-main uk-block">
            
            <?php if (1) : ?>
            <div class="uk-container uk-container-center">
            <?php endif; ?>

                <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                    <main class="<?= '' //$theme->getClasses('columns.main.class') ?>">
                        <?= $view->render('content') ?>
                    </main>

                    <?php if ($view->position()->exists('sidebar-a')) : ?>
                    <aside class="<?= '' //$theme->getClasses('columns.sidebar-a.class') ?>">
                        <?= $view->position('sidebar-a', 'panel') ?>
                    </aside>
                    <?php endif ?>

                    <?php if ($view->position()->exists('sidebar-b')) : ?>
                    <aside class="<?= '' //$theme->getClasses('columns.sidebar-b.class') ?>">
                        <?= $view->position('sidebar-b', 'panel') ?>
                    </aside>
                    <?php endif ?>

                </div>
            
            <?php if (1) : ?>
            </div>
            <?php endif; ?>

        </div>

        <?php if ($view->position()->exists('footer')) : ?>
        <div id="tm-footer" class="tm-footer uk-block">
            
            <?php if (1) : ?>
            <div class="uk-container uk-container-center uk-text-center">
            <?php endif; ?>
                
                <?= $view->position('footer', 'grid') ?>

            <?php if (1) : ?>
            </div>
            <?php endif; ?>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">

                <?php if ($view->menu()->exists('offcanvas')) : ?>
                    <?= $view->menu('offcanvas') ?>
                <?php endif ?>

                <?php if ($view->position()->exists('offcanvas')) : ?>
                    <?= $view->position('offcanvas', 'panel') ?>
                <?php endif ?>

            </div>
        </div>
        <?php endif ?>

        <?= $view->render('footer') ?>

    </body>
</html>

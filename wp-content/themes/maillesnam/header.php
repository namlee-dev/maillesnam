<!DOCTYPE html>
<html lang="<?= bloginfo('language'); ?>">

<head>
    <title><?php wp_title('|','true','right'); ?></title>
    <meta charset="<?= bloginfo('charset'); ?>"/>
    <meta name="description" content="<?= bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="p:domain_verify" content="e219c272969bef257950c72466955d86"/>
    <?php wp_head() ?>
</head>

<body>

    <header class="header">
        <div class="header__top-bar top-bar">
            <h1 class="top-bar__title"><?= bloginfo('description') ?></h1>
            <?php get_template_part('template-parts/social') ?>
        </div>
    </header>

    <main>

    <?php get_template_part('template-parts/menu-header') ?>

<!DOCTYPE html>

<?php require('public/views/common/sessionValidation.php') ?>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/memes.css">


    <script src="https://kit.fontawesome.com/32e257cbac.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/statistics.js" defer></script>
    <script type="text/javascript" src="./public/js/notifications.js" defer></script>
    <script type="text/javascript" src="./public/js/ads.js" defer></script>

    <title>MEMES</title>
</head>

<body>
<div class="base-container">
    <?php require('public/views/common/navBar.php'); ?>
    <main>
        <header>
            <div class="search-bar">
                <input placeholder="search memes">
            </div>
            <div id="addMeme">
                <a href="addMeme" class="button"><i class="fas fa-plus"></i>Add meme</a>
            </div>

        </header>
        <section class="memes">
            <?php foreach (array_reverse($memes) as $meme): ?>

                <div id="<?= $meme->getId(); ?>">
                    <div id="title">
                        <h2><?= $meme->getTitle() ?></h2>
                    </div>
                    <div id="descriptionSocial">

                        <p><?= $meme->getDescription() ?></p>
                        <div class="social-section">
                            <i class="fa-solid fa-circle-plus"> <?= $meme->getLike(); ?></i>
                            <i class="fa-solid fa-circle-minus"> <?= $meme->getDislike(); ?></i>
                        </div>
                    </div>
                    <img src="public/uploads/<?= $meme->getImage() ?>">
                </div>
            <?php endforeach; ?>
        </section>
    </main>
    <div class="ads-container">
        <img src="public/img/cars.gif">
        <img src="public/img/mazda.gif">
        <img src="public/img/mini.gif">

    </div>
</div>
</body>

<template id="memes-template">
    <div id="<?= $meme->getId(); ?>">
        <div id="title">
            <h2><?= $meme->getTitle() ?></h2>
        </div>
        <div id="descriptionSocial">

            <p><?= $meme->getDescription() ?></p>
            <div class="social-section">
                <i class="fa-solid fa-circle-plus"> <?= $meme->getLike(); ?></i>
                <i class="fa-solid fa-circle-minus"> <?= $meme->getDislike(); ?></i>
            </div>
        </div>
        <img src="public/uploads/<?= $meme->getImage() ?>">
    </div>
</template>
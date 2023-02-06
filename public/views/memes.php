<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/memes.css">


    <script src="https://kit.fontawesome.com/32e257cbac.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/visual.js" defer></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/statistics.js" defer></script>

    <title>MEMES</title>
</head>

<body>
<div class="base-container">
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li>
                <i class="fa-solid fa-images"></i>
                <a href="#" class="button">Memes</a>
            </li>
            <li>
                <i class="fa-solid fa-people-group"></i>
                <a href="#" class="button">People</a>
            </li>
            <li>
                <img src="./public/img/trollface.gif">
            </li>
            <li>
                <i class="fa-solid fa-comment"></i>
                <a href="#" class="button">Notifications</a>
            </li>
        </ul>
    </nav>
    <main>
        <header>
            <div class="search-bar">

                <input placeholder="search memes">

            </div>
            <div class="add-meme">
                <i class="fas fa-plus"></i>
                Add new meme
            </div>
        </header>
        <section class="memes">
            <?php foreach ($memes as $meme): ?>

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
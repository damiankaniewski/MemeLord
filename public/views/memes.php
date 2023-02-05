<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/memes.css">
    <script type="text/javascript" src="./public/js/visual.js" defer></script>

    <script src="https://kit.fontawesome.com/32e257cbac.js" crossorigin="anonymous"></script>
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
                <i class="fa-regular fa-comments"></i>
                <a href="#" class="button">Messages</a>
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
                <form>
                    <input placeholder="Search memes">
                </form>
            </div>
            <div class="add-meme">
                <i class="fas fa-plus"></i>
                Add new meme
            </div>
        </header>
        <section class="memes">
            <?php foreach ($memes as $meme): ?>

                <div id="meme-1">

                    <div>
                        <h2><?= $meme->getTitle() ?></h2>
                        <p><?= $meme->getDescription() ?></p>
                        <div class="social-section">
                            <i class="fa-solid fa-thumbs-up"> 44</i>
                            <i class="fa-solid fa-thumbs-down"> 2</i>
                        </div>
                    </div>
                    <img src="public/uploads/<?= $meme->getImage() ?>">
                </div>
            <?php endforeach; ?>
            <div>Have you seen it?</div>
            <div>TiTlE oF MeMe</div>
            <div>Whooooooa</div>
        </section>
    </main>
    <div class="ads-container">
        <img src="public/img/cars.gif">
        <img src="public/img/mazda.gif">
        <img src="public/img/mini.gif">

    </div>
</div>
</body>
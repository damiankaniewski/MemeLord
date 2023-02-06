<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/memes.css">

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
                <a href="memes" class="button">Memes</a>
            </li>
            <li>
                <i class="fa-solid fa-people-group"></i>
                <a href="users" class="button">Users</a>
            </li>
            <li>
                <i class="fa-solid fa-comment"></i>
                <a href="#" class="button">Notifications</a>
            </li>
        </ul>
    </nav>
    <main>
        <header>

        </header>
        <section class="memes-form">
            <form action="addMeme" method="POST" ENCTYPE="multipart/form-data">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                <input name="title" type="text" placeholder="title">
                <textarea name="description" rows="5" placeholder="description"></textarea>

                <input type="file" name="file">
                <button type="submit">UPLOAD</button>
            </form>
        </section>
    </main>
    <div class="ads-container">
        <img src="public/img/cars.gif">
        <img src="public/img/mazda.gif">
        <img src="public/img/mini.gif">

    </div>
</div>
</body>
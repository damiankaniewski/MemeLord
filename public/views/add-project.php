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
        <section class="memes-form">
            <h1>UPLOAD</h1>
            <form action="addMeme" method="POST" ENCTYPE="multipart/form-data">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                <input name="title" type="text" palceholder="title">
                <textarea name="description" rows="5" placeholder="description"></textarea>

                <input type="file" name="file">
                <button type="submit">send</button>
            </form>
        </section>
    </main>
</div>
</body>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Healthy Recipes</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/app.css">

    <script src="/app.js"></script>

</head>

<body>



    <header class="header">
        <nav class="navbar navbar-inverse" style="background-color: #4a3c3f;">
            <div class="container-fluid">
                <div class="container">

                    <h2 class="navbar-brand">
                        <img class="d-block" src="../././../images/Logo.png" height="60px" width="60px">
                    </h2>
                    <nav class="navbar ">

                        <ul class="navbar-nav ml-auto headul">

                            <?php if (Auth::check()) : ?>
                                <div class="log"> You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> </div>
                                <div class="headli">
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="/console/logout" style="color:white;">Logout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="/console/dashboard" style="color:white;">Home</a>
                                    </li>
                                </div>
                            <?php else : ?>
                                <a href="/">Return to Recipes</a>
                            <?php endif; ?>
                        </ul>
                    </nav>
    </header>


    <hr>

    
    <section class="w2-padding">

        <h2 style="margin-left: 559px;">Edit Recipes</h2>

        <form method="post" action="/recipe/edit/<?= $recipe->id ?>" novalidate class="w3-margin-bottom" style=" margin-left: 559px; background: #4a3c3f; width: 440px; height: 331px;">

            <?= csrf_field() ?>

            <div class="w3-margin-bottom">
                <label for="title" style="color: white;">Title:</label><br>
                <input type="text" name="title" id="title" value="<?= old('title', $recipe->title) ?>" required>

                <?php if ($errors->first('title')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                <?php endif; ?>
            </div>

            <div class="w3-margin-bottom">
                <label for="url" style="color: white;" >Image URL:</label><br>
                <input type="text" name="url" id="url" value="<?= old('url', $recipe->url) ?>">

                <?php if ($errors->first('url')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('url'); ?></span>
                <?php endif; ?>
            </div>


            <div class="w3-margin-bottom">
                <label for="content" style="color: white;">Content:</label><br>
                <textarea name="content" id="content" required><?= old('content', $recipe->content) ?></textarea>

                <?php if ($errors->first('content')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('content'); ?></span>
                <?php endif; ?>
            </div>
            <div style="margin-left:120px;">
                <button type="submit" class="w3-button w3-green">Edit Recipe</button>
            </div>
        </form>

        <a href="/recipe/list" style="margin-left: 557px;">Back to recipe List</a>

    </section>
    <footer class="text-center text-white" style="background-color: #4a3c3f; height:114px; margin-top:120px ">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="color: white; margin-top:20px;">
            © 2022 Jinal Patel

        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
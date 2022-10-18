<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Portfolio</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= url('app.css') ?>">

    <script src="<?= url('app.js') ?>"></script>

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

    <?php if (session()->has('message')) : ?>
        <div class="w3-padding w3-margin-top w3-margin-bottom">
            <div class="w3-red w3-center w3-padding"><?= session()->get('message') ?></div>
        </div>
    <?php endif; ?>

    <section class="w3-padding">
        <a href="/recipe/add" class="w3-button w3-green">New Recipe</a>
        <h2>Manage Recipe</h2>

        <!-- <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
            <tr class="w3-red">
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th></th>
                <th></th>
            </tr> -->
        <div class="recipelist">
            <div class="reci">
            <?php foreach ($recipes as $rec) : ?>
                <img src="<?= $rec->url ?>" width="300" height="300"><br>
              <h3>  <?= $rec->title ?></h3><br>
             <p class="content" style="width:1343px;"><b>Recipe: </b><?= $rec->content ?></p>
            <button> <a href="/recipe/edit/<?= $rec->id ?>">Edit</a></button>
            <button><a href="/recipe/delete/<?= $rec->id ?>">Delete</a></button>
            </div>
            <hr>
            <?php endforeach; ?>
        </div>
        </table>



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
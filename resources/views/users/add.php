<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Healthy Diet</title>

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
                        <?php if(Auth::check()): ?>
                You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> | 
                <a href="/console/logout">Log Out</a> | 
                <a href="/console/dashboard">Dashboard</a> | 
                <a href="/">Website Home Page</a>
            <?php else: ?>
                <a href="/" style="color:white;margin-left: 988px;">Return to Recipes</a>
            <?php endif; ?>
                           
                        </ul>
                    </nav>
    </header>

    

        <hr>

        <section class="w3-padding">

            <h2 style="margin-left: 558px;">Add User</h2>

            <form method="post" action="/user/add" novalidate class="w3-margin-bottom"  style=" margin-left: 559px; background: #4a3c3f; width: 440px; height: 331px;">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom"style="margin-left: 118px;">
                    <label for="first" style="color: white;">First Name:</label><br>
                    <input type="text" name="first" id="first" value="<?= old('first') ?>" required>
                    
                    <?php if($errors->first('first')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('first'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom" style="margin-left: 118px;">
                    <label for="last" style="color: white;">Last Name:</label><br>
                    <input type="text" name="last" id="last" value="<?= old('last') ?>" required>

                    <?php if($errors->first('last')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('last'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom" style="margin-left: 118px;">
                    <label for="email" style="color: white;">Email:</label><br>
                    <input type="email" name="email" id="email" value="<?= old('email') ?>" required>

                    <?php if($errors->first('email')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom"style="margin-left: 118px;">
                    <label for="password" style="color: white;">Password:</label><br>
                    <input type="password" name="password" id="password">

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="w3-button w3-green" style="margin-left:118px;">Add User</button>

            </form>

            <a href="/console/users/list" style="margin-left: 556px;">Back to User List</a>

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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>

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
                            <div style="margin-left:898px;">
                        <h1 class="w3-text-white">Healthy Recipes</h1>
                         <a href="/"style="color:white; text-decoration:none;">Return to Home </a>
                         </div>
                        </ul>
                    </nav>
    </header>
      

        <hr>

        <section class="w3-padding">

            <form method="post" action="/console/login" novalidate style=" margin-left: 559px; background: #4a3c3f; width: 440px; height: 300px;">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="email" style="color:white ; margin-top:20px;">Email Address:</label><br>
                    <input type="email" name="email" id="email" value="<?= old('email') ?>" required>
                    
                    <?php if($errors->first('email')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="password" style="color:white;">Password:</label><br>
                    <input type="password" name="password" id="password" required>

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" style="margin-left: 120px;">Log In</button><br>
                <span style="color: white; margin-left: 119px;">Don't have an account? </span><a href="/user/register"style="color:white;">Sign Up</a>
            </form>

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


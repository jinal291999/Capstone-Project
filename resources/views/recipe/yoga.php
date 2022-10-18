<!DOCTYPE html>
<html>
  <head>

    <title>Youtube Video Advanced Search App in Javascript</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= url('app1.js') ?>"></script>
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
                        
                         <a href="/"style="color:white; text-decoration:none;">Return to Home </a>
                         </div>
                        </ul>
                    </nav>
    </header>
  <div class="container">
      <br>
      <h1 class="text-center">
          Youtube Advanced Search App
      </h1>
      <br>
  </div>
  <div id="videoList" style="display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;margin: auto;
    text-align: center;">
    
</div>
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
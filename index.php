 <?php
 define("__CONFIG__", true);
 require_once "inc/config.php";

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="robots" content="follow">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/css/uikit.min.css" />
     <title>Page title</title>
   </head>
   <body>


   <div class="uk-section uk-container">
     <?php echo "Hello Worold ";
     echo date("d m Y");

      ?>
      <p>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>


      </p>
   </div>



   <?php require_once "inc/footer.php" ?>


   </body>
 </html>

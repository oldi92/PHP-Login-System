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
     <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
       <form class="uk-form-stacked js-register">

         <h2>Register</h2>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="example@example.com">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Enter your password">
        </div>
    </div>

    <div class="uk-margin uk-alert uk-alert-danger js-error" style="display:none">
     
    </div>


    <div class="uk-margin">
        <button class="uk-button uk-button-default" type="submit" >Submit</button>
    </div>


</form>
     </div>
   </div>

   <?php require_once "inc/footer.php" ?>


   </body>
 </html>

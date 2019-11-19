<?php

//force user to log in
 function ForceLogin(){
if (isset($_SESSION['user_id'])) {
  // the user is allowed here
} else {
  //user is not allowed
  header("location:/php_login_course/login.php"); exit;
}
}


function ForceDashboard(){
  if (isset($_SESSION['user_id'])) {
    header("location:dashboard.php"); exit;
  }else {

  }
}



 ?>

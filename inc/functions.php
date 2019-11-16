<?php
//force user to login
function ForceLolgin(){

if (isset($_SESSION['user_id'])) {
  // the user is allowd here
}else{
   header("Location: login.php");
   exit;
}
}



function ForceDashboard(){

if (isset($_SESSION['user_id'])) {
  // the user is allowd here
  header("Location: dashboard.php");
  exit;
}else{

}
}





 ?>

<?php
//reset.php to reset password
setcookie("type", "", time()-3600);

header("location:signup.php");

?>
<?php
//logout.php
setcookie("type", "", time()-3600);
$upOne = realpath(dirname("project2", 1));
header("location:../index.html");

?>

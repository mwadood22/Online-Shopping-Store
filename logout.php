<?php
session_start();
setcookie("email", "", time() - 3600); 
setcookie("password", "", time() - 3600);
session_destroy();
session_write_close();
header('Location: index.php');
?>
<?php
session_start();
unset($_SESSION['emailUsuario']);
unset($_SESSION['idUsuario']);
session_destroy();

header("Location: index.php");
exit;
?>

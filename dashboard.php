<?php
session_start();
include('verifica_login.php')
?>
<h2><?php echo $_SESSION['usuario']?></h2>
<h2><a href="logout.php">sair</a></h2>
<?php
include('connexion.php');
session_destroy();

header("Location: accueil.php");
exit;
?>
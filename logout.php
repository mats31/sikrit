<?php
// On détruit la session 
session_destroy(); 
// On redirige le visiteur vers la page d'accueil 
header ('location: index.php'); 
?>
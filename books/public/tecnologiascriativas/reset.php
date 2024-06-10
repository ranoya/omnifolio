<?php
session_start();

$_SESSION['tecidolastpage'] = NULL;
$_SESSION['theme'] = NULL;
$_SESSION['bgcolor'] = NULL;
$_SESSION['forecolor'] = NULL;

header('Location: index.php');
?>
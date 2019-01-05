<?php
session_start();

session_unisset();

session_destroy();

header("Location: login.php");
?>

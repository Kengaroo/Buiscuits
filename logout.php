<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['cookID']);
session_destroy();
header('Location: /login.php');
<?php
session_destroy();
$_POST = array();
header("Location: /login.php");

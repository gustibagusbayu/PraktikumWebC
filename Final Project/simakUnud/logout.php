<?php
include "function.php";
$_SESSION = [];
session_unset();
session_destroy();
header("location: index.php");

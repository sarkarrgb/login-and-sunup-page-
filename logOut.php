<?php
include('config.php');
session_destroy();
header('location:' .SITEURL. 'index.php');
?>
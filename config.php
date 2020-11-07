<?php error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); 
session_set_cookie_params(216000);
ini_set('session.gc_maxlifetime', 216000);
session_start(); 
include "db.php"; ?>

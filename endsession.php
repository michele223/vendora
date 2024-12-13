<?php 
require("./database/session.php");
session_unset();
session_destroy();
header("location: http://localhost/vendora/home.php");
exit();
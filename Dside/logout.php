<?php

session_start();

session_destroy();

header("Location: ../Uside/login.php");
exit();
?>
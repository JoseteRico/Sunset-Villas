<?php
session_start();
session_destroy();

echo "you are being redirected...";

header("Location: manage.php");
?>
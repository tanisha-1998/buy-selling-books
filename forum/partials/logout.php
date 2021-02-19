<?php
session_start();
echo "logout";

session_destroy();
header("location:/forum")

?>
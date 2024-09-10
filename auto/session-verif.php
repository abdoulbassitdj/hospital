<?php

if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
    header("Location:connect.php?message=3");
}

?>
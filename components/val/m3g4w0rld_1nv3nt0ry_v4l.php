<?php
session_start();

if (!empty($_SESSION['m364_53c5r1ty'])) {
    $m364_53c5r1ty = $_SESSION['m364_53c5r1ty'];
} else {
    $m364_53c5r1ty = "";
}

if ($m364_53c5r1ty != "01787amk038894kk") {
    header("Location: ../index.php");
    exit();
}

?>

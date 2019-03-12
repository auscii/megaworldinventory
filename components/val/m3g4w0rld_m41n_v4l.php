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

if (!empty($_SESSION['m364_uname'])) {
    $m364_uname = $_SESSION['m364_uname'];
} else {
    $m364_uname = "";
}

if (!empty($_SESSION['m364_upass'])) {
    $m364_upass = $_SESSION['m364_upass'];
} else {
    $m364_upass = "";
}

if (!empty($_SESSION['m364_fname'])) {
    $m364_fname = $_SESSION['m364_fname'];
} else {
    $m364_fname = "";
}

if (!empty($_SESSION['m364_lname'])) {
    $m364_lname = $_SESSION['m364_lname'];
} else {
    $m364_lname = "";
}

if (!empty($_SESSION['m364_mname'])) {
    $m364_mname = $_SESSION['m364_mname'];
} else {
    $m364_mname = "";
}

if (!empty($_SESSION['m364_3m41l'])) {
    $m364_3m41l = $_SESSION['m364_3m41l'];
} else {
    $m364_3m41l = "";
}

if (!empty($_SESSION['m364_c0nt4ct'])) {
    $m364_c0nt4ct = $_SESSION['m364_c0nt4ct'];
} else {
    $m364_c0nt4ct = "";
}

if (!empty($_SESSION['m364_1d'])) {
    $m364_1d = $_SESSION['m364_1d'];
} else {
    $m364_1d = "";
}

?>

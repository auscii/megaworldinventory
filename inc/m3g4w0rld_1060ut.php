<?php
include("m3g4w0rld_c0mm0n.php");
session_start();

if (!empty($_SESSION['m364_uname'])) {
    $m364_uname = $_SESSION['m364_uname'];
} else {
    $m364_uname = "";
}

$u53r_action = "Logged out";

$m3g4w0rld_5t5t3m3nt_4ct1vity = $xcon->prepare("INSERT INTO u53r_1065 (
																		u53r_user,
																		u53r_action
																		)
																		VALUES (
																		:u53r_user,
																		:u53r_action
																		)");
$m3g4w0rld_5t5t3m3nt_4ct1vity->execute(
		array(
				'u53r_user'                => $m364_uname,
				'u53r_action'						   => $u53r_action
		)
);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" sizes="16x16" href="#">
</head>
<body>
<?php
	  session_destroy();
    header("Location: ../index.php");
?>

</body>
</html>

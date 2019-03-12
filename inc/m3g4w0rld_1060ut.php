<?php
include("m3g4w0rld_c0mm0n.php");
session_start();
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

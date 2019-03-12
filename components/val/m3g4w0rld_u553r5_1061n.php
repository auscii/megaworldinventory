<?php
session_start();

if (!empty($_POST['m3g4w0rld_u553r5_u53r'])) {
	  $m3g4w0rld_u553r5_u53r = $_POST['m3g4w0rld_u553r5_u53r'];
} else {
	  $m3g4w0rld_u553r5_u53r = "";
}

if (!empty($_POST['m3g4w0rld_u553r5_p455'])) {
	  $m3g4w0rld_u553r5_p455 = $_POST['m3g4w0rld_u553r5_p455'];
		$m3g4w0rld_u553r5_p455 = hash("sha256", $m3g4w0rld_u553r5_p455);
} else {
		$m3g4w0rld_u553r5_p455 = "";
}




if (!empty($_POST['reg_u553r5_fname'])) {
     $reg_u553r5_fname = $_POST['reg_u553r5_fname'];
} else {
	   $reg_u553r5_fname = "";
}

if (!empty($_POST['reg_u553r5_lname'])) {
     $reg_u553r5_lname = $_POST['reg_u553r5_lname'];
} else {
	   $reg_u553r5_lname = "";
}

if (!empty($_POST['reg_u553r5_mname'])) {
     $reg_u553r5_mname = $_POST['reg_u553r5_mname'];
} else {
	   $reg_u553r5_mname = "";
}

if (!empty($_POST['reg_u553r5_email'])) {
     $reg_u553r5_email = $_POST['reg_u553r5_email'];
} else {
	   $reg_u553r5_email = "";
}

if (!empty($_POST['reg_u553r5_contact'])) {
     $reg_u553r5_contact = $_POST['reg_u553r5_contact'];
} else {
	   $reg_u553r5_contact = "";
}

if (!empty($_POST['reg_u553r5_uname'])) {
     $reg_u553r5_uname = $_POST['reg_u553r5_uname'];
} else {
	   $reg_u553r5_uname = "";
}

if (!empty($_POST['reg_u553r5_pass'])) {
     $reg_u553r5_pass = $_POST['reg_u553r5_pass'];
 		 $reg_u553r5_pass = hash("sha256", $reg_u553r5_pass);
} else {
	   $reg_u553r5_pass = "";
}

if (!empty($_POST['reg_u553r5_conf_pass'])) {
     $reg_u553r5_conf_pass = $_POST['reg_u553r5_conf_pass'];
 		 $reg_u553r5_conf_pass = hash("sha256", $reg_u553r5_conf_pass);
} else {
	   $reg_u553r5_conf_pass = "";
}



if (isset($_POST['m3g4w0rld_u553r5_r3615t3r_6utt0n'])) {
		if ($reg_u553r5_pass != $reg_u553r5_conf_pass) {
				echo "<script>alert('Password Mismatched! Please check your password..'); window.location.href='index.php';</script>";
				exit();
		} else {
						$m3g4w0rld_5t5t3m3nt = $xcon->prepare("INSERT INTO u553r5 (
																								u553r5_fname,
																								u553r5_lname,
																								u553r5_mname,
																								u553r5_email,
																								u553r5_contact,
																								u553r5_uname,
																								u553r5_upass
																								)
																								VALUES (
																								:u553r5_fname,
																								:u553r5_lname,
																								:u553r5_mname,
																								:u553r5_email,
																								:u553r5_contact,
																								:u553r5_uname,
																								:u553r5_upass
																								)");
						$m3g4w0rld_5t5t3m3nt->execute(
								array(
										'u553r5_fname'             => $reg_u553r5_fname,
										'u553r5_lname'   					 => $reg_u553r5_lname,
										'u553r5_mname'    				 => $reg_u553r5_mname,
										'u553r5_email'       			 => $reg_u553r5_email,
										'u553r5_contact'      		 => $reg_u553r5_contact,
										'u553r5_uname'      		 	 => $reg_u553r5_uname,
										'u553r5_upass'      		   => $reg_u553r5_pass
								)
						);
						$m3g4w0rld_5t5t3m3nt->fetchAll();
		}
}

if (isset($_POST['m3g4w0rld_u553r5_1061n_6utt0n'])) {
		$xcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$m364 = $xcon->prepare("SELECT * FROM u553r5 WHERE u553r5_uname = :m3g4w0rld_u553r5_u53r AND u553r5_upass = :m3g4w0rld_u553r5_p455");
		$m364->execute(
        array(
            'm3g4w0rld_u553r5_u53r'      		 	 => $m3g4w0rld_u553r5_u53r,
            'm3g4w0rld_u553r5_p455'      		   => $m3g4w0rld_u553r5_p455
        )
    );
		$row = $m364->fetch(PDO::FETCH_ASSOC);
		if ($row) {
        $_SESSION['welcome'] = 1;
        $_SESSION['m364_uname']=$row['u553r5_uname'] ;
        $_SESSION['m364_upass']=$row['u553r5_upass'] ;
        $_SESSION['m364_fname']=$row['u553r5_fname'] ;
        $_SESSION['m364_lname']=$row['u553r5_lname'] ;
        $_SESSION['m364_mname']=$row['u553r5_mname'];
        $_SESSION['m364_3m41l']=$row['u553r5_email'];
        $_SESSION['m364_c0nt4ct']=$row['u553r5_contact'];
        $_SESSION['m364_1d']=$row['u553r5_id'] ;
        $_SESSION['m364_4ct1v3']=$row['u553r5_active'] ;
        $_SESSION['m364_53c5r1ty']="01787amk038894kk";

        // $user_Position = $row['erovoutika_position'];
        // if($user_Position === "Administrator"){
        //     header("Location: admin/erovoutika_admin.php");
        // }
        // else if($user_Position === "Customer"){
        //     header("Location: erovoutika_main.php");
        //     $_SESSION['erv_customer_user']="!erv0123klqiwoeiq12830zxcaq23h@";
        // }
				header("Location: components/m3g4w0rld_m41n.php");
				exit();
		} else {
			echo "<script>alert('incorrect Password!'); window.location.href='index.php';</script>";
			exit();
		}
}

?>

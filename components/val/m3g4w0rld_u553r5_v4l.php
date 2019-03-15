<?php
// include("../inc/m3g4w0rld_c0mm0n.php");
session_start();

// if (!empty($_POST['u553r5_position'])) {
//     $u553r5_position = "r36u14ru53r";
// } else {
//     $u553r5_position = "";
// }
$u553r5_position = "r36u14ru53r";

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

$m364_user_logged = $m364_fname . " " . $m364_mname . " " . $m364_lname;

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

if (!empty($_SESSION['m364_53c5r1ty'])) {
    $m364_53c5r1ty = $_SESSION['m364_53c5r1ty'];
} else {
    $m364_53c5r1ty = "";
}

if (!empty($_SESSION['m364_p051t10n'])) {
    $m364_p051t10n = $_SESSION['m364_p051t10n'];
} else {
    $m364_p051t10n = "";
}

if ($m364_53c5r1ty != "01787amk038894kk") {
    header("Location: ../index.php");
    exit();
}

if (!empty($_POST['u553r5_fname'])) {
	  $u553r5_fname = $_POST['u553r5_fname'];
} else {
		$u553r5_fname = "";
}

if (!empty($_POST['u553r5_lname'])) {
	  $u553r5_lname = $_POST['u553r5_lname'];
} else {
		$u553r5_lname = "";
}

if (!empty($_POST['u553r5_mname'])) {
	  $u553r5_mname = $_POST['u553r5_mname'];
} else {
		$u553r5_mname = "";
}

if (!empty($_POST['u553r5_email'])) {
	  $u553r5_email = $_POST['u553r5_email'];
} else {
		$u553r5_email = "";
}

if (!empty($_POST['u553r5_contact'])) {
	  $u553r5_contact = $_POST['u553r5_contact'];
} else {
		$u553r5_contact = "";
}

if (!empty($_POST['u553r5_uname'])) {
	   $u553r5_uname = $_POST['u553r5_uname'];
} else {
		 $u553r5_uname = "";
}

if (!empty($_POST['u553r5_upass'])) {
	   $u553r5_upass = $_POST['u553r5_upass'];
		 $u553r5_upass = hash("sha256", $u553r5_upass);
} else {
		 $u553r5_upass = "";
}

if (!empty($_POST['u553r5_conf_upass'])) {
	   $u553r5_conf_upass = $_POST['u553r5_conf_upass'];
		 $u553r5_conf_upass = hash("sha256", $u553r5_conf_upass);
} else {
		 $u553r5_conf_upass = "";
}



if (!empty($_POST['u553r5_key'])) {
	   $u553r5_key = $_POST['u553r5_key'];
} else {
		 $u553r5_key = "not u553r5_key";
}

if (!empty($_POST['m3g4w0rld_5t4tu5'])) {
	  $m3g4w0rld_5t4tu5 = $_POST['m3g4w0rld_5t4tu5'];
} else {
		$m3g4w0rld_5t4tu5 = "";
}

if (!empty($_POST['m3g4w0rld_5t4tu5_d3l3t3'])) {
	  $m3g4w0rld_5t4tu5_d3l3t3 = $_POST['m3g4w0rld_5t4tu5_d3l3t3'];
} else {
		$m3g4w0rld_5t4tu5_d3l3t3 = "";
}

if (!empty($_POST['u553r5_key_d3l3t3'])) {
	  $u553r5_key_d3l3t3 = $_POST['u553r5_key_d3l3t3'];
} else {
		$u553r5_key_d3l3t3 = "";
}

if (!empty($_POST['m364_4ppr0v4l_4n5'])) {
    $m364_4ppr0v4l_4n5 = $_POST['m364_4ppr0v4l_4n5'];
} else {
    $m364_4ppr0v4l_4n5 = "";
}

// if (!empty($_POST['m364_4ppr0v4l_y3s'])) {
//     $m364_4ppr0v4l_y3s = $_POST['m364_4ppr0v4l_y3s'];
// } else {
//     $m364_4ppr0v4l_y3s = "";
// }
//
// if (!empty($_POST['m364_4ppr0v4l_n0'])) {
//     $m364_4ppr0v4l_n0 = $_POST['m364_4ppr0v4l_n0'];
// } else {
//     $m364_4ppr0v4l_n0 = "";
// }

if (!empty($_POST['m364_4ppr0v4l_st4tus'])) {
    $m364_4ppr0v4l_st4tus = $_POST['m364_4ppr0v4l_st4tus'];
} else {
    $m364_4ppr0v4l_st4tus = "";
}

if (!empty($_POST['m364_4ppr0v4l_k3y'])) {
    $m364_4ppr0v4l_k3y = $_POST['m364_4ppr0v4l_k3y'];
} else {
    $m364_4ppr0v4l_k3y = "";
}

if (!empty($_POST['u553r5_fullname_d3l3t3'])) {
    $u553r5_fullname_d3l3t3 = $_POST['u553r5_fullname_d3l3t3'];
} else {
    $u553r5_fullname_d3l3t3 = "";
}




if ($m364_4ppr0v4l_st4tus == "updateuserapproval") {
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("UPDATE u553r5 SET
                                           u553r5_active = :u553r5_active
                                           WHERE u553r5_id = $m364_4ppr0v4l_k3y;
                                        ");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'u553r5_active'             => $m364_4ppr0v4l_4n5,
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
}



if($m3g4w0rld_5t4tu5 == "addusers"){
    // move_uploaded_file($_FILES["upload_pic"]["tmp_name"],"images/" . $_FILES["upload_pic"]["name"]);
    // $imageLocation=$_FILES["upload_pic"]["name"];
		if ($u553r5_upass != $u553r5_conf_upass) {
			  echo "<script>alert('Password Mismatched! Please check your password..'); window.location.href='m3g4w0rld_u553r5.php';</script>";
				exit();
		} else {
				    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("INSERT INTO u553r5 (
				                                        u553r5_fname,
				                                        u553r5_lname,
				                                        u553r5_mname,
				                                        u553r5_email,
				                                        u553r5_contact,
																								u553r5_uname,
																								u553r5_upass,
                                                u553r5_position
				                                        )
				                                        VALUES (
				                                        :u553r5_fname,
				                                        :u553r5_lname,
				                                        :u553r5_mname,
				                                        :u553r5_email,
				                                        :u553r5_contact,
																								:u553r5_uname,
																								:u553r5_upass,
                                                :u553r5_position
				                                        )");
				    $m3g4w0rld_5t5t3m3nt->execute(
				        array(
				            'u553r5_fname'             => $u553r5_fname,
				            'u553r5_lname'   					 => $u553r5_lname,
				            'u553r5_mname'    				 => $u553r5_mname,
				            'u553r5_email'       			 => $u553r5_email,
				            'u553r5_contact'      		 => $u553r5_contact,
				            'u553r5_uname'      		 	 => $u553r5_uname,
				            'u553r5_upass'      		   => $u553r5_upass,
                    'u553r5_position'          => $u553r5_position
				        )
				    );
				    $m3g4w0rld_5t5t3m3nt->fetchAll();



            $Act1v1ty_user = $u553r5_fname . " " . $u553r5_mname . " " . $u553r5_lname;
            $Act1v1ty_action = "Added New User - " . $Act1v1ty_user;

            $m3g4w0rld_5t5t3m3nt_4ct1vity = $xcon->prepare("INSERT INTO 4ct1v1ty_1065 (
                                                4ct1v1ty_user,
                                                4ct1v1ty_action
                                                )
                                                VALUES (
                                                :4ct1v1ty_user,
                                                :4ct1v1ty_action
                                                )");
            $m3g4w0rld_5t5t3m3nt_4ct1vity->execute(
                array(
                    '4ct1v1ty_user'                => $Act1v1ty_user,
                    '4ct1v1ty_action'   					 => $Act1v1ty_action

                )
            );
            $m3g4w0rld_5t5t3m3nt_4ct1vity->fetchAll();


		}
}

if ($m3g4w0rld_5t4tu5 == "editusers"){
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("UPDATE u553r5 SET
			                                    u553r5_fname = :u553r5_fname,
			                                    u553r5_lname = :u553r5_lname,
			                                    u553r5_mname = :u553r5_mname,
			                                    u553r5_email = :u553r5_email,
																					u553r5_contact = :u553r5_contact,
																					u553r5_uname = :u553r5_uname,
																					u553r5_upass = :u553r5_upass
			                                    WHERE u553r5_id = $u553r5_key;
                                        ");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'u553r5_fname'             => $u553r5_fname,
            'u553r5_lname'   					 => $u553r5_lname,
            'u553r5_mname'    				 => $u553r5_mname,
            'u553r5_email'       			 => $u553r5_email,
            'u553r5_contact'      		 => $u553r5_contact,
            'u553r5_uname'      		 	 => $u553r5_uname,
            'u553r5_upass'      		   => $u553r5_upass
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();

    $Act1v1ty_user = $u553r5_fname . " " . $u553r5_mname . " " . $u553r5_lname;
    $Act1v1ty_action = "Editted User - " . $Act1v1ty_user;

    $m3g4w0rld_5t5t3m3nt_4ct1vity = $xcon->prepare("INSERT INTO 4ct1v1ty_1065 (
                                        4ct1v1ty_user,
                                        4ct1v1ty_action
                                        )
                                        VALUES (
                                        :4ct1v1ty_user,
                                        :4ct1v1ty_action
                                        )");
    $m3g4w0rld_5t5t3m3nt_4ct1vity->execute(
        array(
            '4ct1v1ty_user'                => $Act1v1ty_user,
            '4ct1v1ty_action'   					 => $Act1v1ty_action

        )
    );
    $m3g4w0rld_5t5t3m3nt_4ct1vity->fetchAll();
}

if ($m3g4w0rld_5t4tu5_d3l3t3 == "deleteusers"){
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("DELETE FROM u553r5 WHERE u553r5_id = :u553r5_key_d3l3t3");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'u553r5_key_d3l3t3'      => $u553r5_key_d3l3t3
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();

    $Act1v1ty_user = $m364_user_logged;
    $Act1v1ty_action = "Deleted User - " . $u553r5_fullname_d3l3t3;

    $m3g4w0rld_5t5t3m3nt_4ct1vity = $xcon->prepare("INSERT INTO 4ct1v1ty_1065 (
                                        4ct1v1ty_user,
                                        4ct1v1ty_action
                                        )
                                        VALUES (
                                        :4ct1v1ty_user,
                                        :4ct1v1ty_action
                                        )");
    $m3g4w0rld_5t5t3m3nt_4ct1vity->execute(
        array(
            '4ct1v1ty_user'                => $Act1v1ty_user,
            '4ct1v1ty_action'   					 => $Act1v1ty_action

        )
    );
    $m3g4w0rld_5t5t3m3nt_4ct1vity->fetchAll();
}

$sql_count = "SELECT count(*) FROM u553r5 WHERE u553r5_active = 0";
$res_count = $xcon->prepare($sql_count);
$res_count->execute();
$num_approv = $res_count->fetchColumn();
?>

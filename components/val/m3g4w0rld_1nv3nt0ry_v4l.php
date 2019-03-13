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

if (!empty($_SESSION['m364_p051t10n'])) {
    $m364_p051t10n = $_SESSION['m364_p051t10n'];
} else {
    $m364_p051t10n = "";
}




if (!empty($_POST['empl0y335_fname'])) {
    $empl0y335_fname = $_POST['empl0y335_fname'];
} else {
    $empl0y335_fname = "";
}

if (!empty($_POST['empl0y335_mname'])) {
    $empl0y335_mname = $_POST['empl0y335_mname'];
} else {
    $empl0y335_mname = "";
}

if (!empty($_POST['empl0y335_lname'])) {
    $empl0y335_lname = $_POST['empl0y335_lname'];
} else {
    $empl0y335_lname = "";
}

if (!empty($_POST['empl0y335_age'])) {
    $empl0y335_age = $_POST['empl0y335_age'];
} else {
    $empl0y335_age = "";
}

if (!empty($_POST['empl0y335_bdate'])) {
    $empl0y335_bdate = $_POST['empl0y335_bdate'];
} else {
    $empl0y335_bdate = "";
}

if (!empty($_POST['empl0y335_email'])) {
    $empl0y335_email = $_POST['empl0y335_email'];
} else {
    $empl0y335_email = "";
}

if (!empty($_POST['empl0y335_contact'])) {
    $empl0y335_contact = $_POST['empl0y335_contact'];
} else {
    $empl0y335_contact = "";
}

if (!empty($_POST['empl0y335_address'])) {
    $empl0y335_address = $_POST['empl0y335_address'];
} else {
    $empl0y335_address = "";
}

if (!empty($_POST['empl0y335_country'])) {
    $empl0y335_country = $_POST['empl0y335_country'];
} else {
    $empl0y335_country = "";
}




if (!empty($_POST['m3g4w0rld_5t4tu5'])) {
     $m3g4w0rld_5t4tu5 = $_POST['m3g4w0rld_5t4tu5'];
} else {
     $m3g4w0rld_5t4tu5 = "";
}

if (!empty($_POST['empl0y335_key'])) {
     $empl0y335_key = $_POST['empl0y335_key'];
} else {
     $empl0y335_key = "";
}

if (!empty($_POST['m3g4w0rld_5t4tu5_d3l3t3'])) {
     $m3g4w0rld_5t4tu5_d3l3t3 = $_POST['m3g4w0rld_5t4tu5_d3l3t3'];
} else {
     $m3g4w0rld_5t4tu5_d3l3t3 = "";
}

if (!empty($_POST['empl0y335_key_d3l3t3'])) {
     $empl0y335_key_d3l3t3 = $_POST['empl0y335_key_d3l3t3'];
} else {
     $empl0y335_key_d3l3t3 = "";
}




if (!empty($_POST['emp_search'])) {
     $emp_search = $_POST['emp_search'];
} else {
     $emp_search = "";
}

// if (isset($_POST['emp_key_btn_search'])) {
//     $m3g4w0rld_5t5t3m3nt = $xcon->prepare("SELECT * FROM 3mpl0y335 WHERE empl0y335_fname = :emp_search");
//     $m3g4w0rld_5t5t3m3nt->execute(
//         array(
//             'emp_search'      => $emp_search
//         )
//     );
//     $m3g4w0rld_5t5t3m3nt->fetchAll();
// }

if($m3g4w0rld_5t4tu5 === "addemployee"){
    // move_uploaded_file($_FILES["upload_pic"]["tmp_name"],"images/" . $_FILES["upload_pic"]["name"]);
    // $imageLocation=$_FILES["upload_pic"]["name"];
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("INSERT INTO 3mpl0y335 (
                                        empl0y335_fname,
                                        empl0y335_mname,
                                        empl0y335_lname,
                                        empl0y335_age,
                                        empl0y335_bdate,
																				empl0y335_email,
																				empl0y335_contact,
                                        empl0y335_address,
                                        empl0y335_country,
                                        empl0y335_creator_no
                                        )
                                        VALUES (
                                        :empl0y335_fname,
                                        :empl0y335_mname,
                                        :empl0y335_lname,
                                        :empl0y335_age,
                                        :empl0y335_bdate,
																				:empl0y335_email,
																				:empl0y335_contact,
                                        :empl0y335_address,
                                        :empl0y335_country,
                                        :empl0y335_creator_no
                                        )");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'empl0y335_fname'              => $empl0y335_fname,
            'empl0y335_mname'   					 => $empl0y335_mname,
            'empl0y335_lname'    				   => $empl0y335_lname,
            'empl0y335_age'       			   => $empl0y335_age,
            'empl0y335_bdate'      		     => $empl0y335_bdate,
            'empl0y335_email'      		 	   => $empl0y335_email,
            'empl0y335_contact'      		 	 => $empl0y335_contact,
            'empl0y335_address'            => $empl0y335_address,
            'empl0y335_country'      		   => $empl0y335_country,
            'empl0y335_creator_no'         => $m364_1d

        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
}

if ($m3g4w0rld_5t4tu5 == "editemployee"){
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("UPDATE 3mpl0y335 SET
			                                    empl0y335_fname   = :empl0y335_fname,
			                                    empl0y335_mname   = :empl0y335_mname,
			                                    empl0y335_lname   = :empl0y335_lname,
			                                    empl0y335_age     = :empl0y335_age,
																					empl0y335_bdate   = :empl0y335_bdate,
																					empl0y335_email   = :empl0y335_email,
                                          empl0y335_contact = :empl0y335_contact,
																					empl0y335_address = :empl0y335_address,
																					empl0y335_country = :empl0y335_country
			                                    WHERE empl0y335_id = $empl0y335_key;
                                        ");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'empl0y335_fname'              => $empl0y335_fname,
            'empl0y335_mname'   					 => $empl0y335_mname,
            'empl0y335_lname'    				   => $empl0y335_lname,
            'empl0y335_age'       			   => $empl0y335_age,
            'empl0y335_bdate'      		     => $empl0y335_bdate,
            'empl0y335_email'      		 	   => $empl0y335_email,
            'empl0y335_contact'      		 	 => $empl0y335_contact,
            'empl0y335_address'            => $empl0y335_address,
            'empl0y335_country'      		   => $empl0y335_country
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
}

if ($m3g4w0rld_5t4tu5_d3l3t3 == "deletemployee"){
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("DELETE FROM 3mpl0y335 WHERE empl0y335_id = :empl0y335_key_d3l3t3");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'empl0y335_key_d3l3t3'      => $empl0y335_key_d3l3t3
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
}




?>

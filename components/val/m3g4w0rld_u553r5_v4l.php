<?php
// include("../inc/m3g4w0rld_c0mm0n.php");

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



if($m3g4w0rld_5t4tu5 == "addusers"){
    // move_uploaded_file($_FILES["upload_pic"]["tmp_name"],"images/" . $_FILES["upload_pic"]["name"]);
    // $imageLocation=$_FILES["upload_pic"]["name"];
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("INSERT INTO u553r5 (
                                        u553r5_fname,
                                        u553r5_lname,
                                        u553r5_mname,
                                        u553r5_email,
                                        u553r5_contact
                                        )
                                        VALUES (
                                        :u553r5_fname,
                                        :u553r5_lname,
                                        :u553r5_mname,
                                        :u553r5_email,
                                        :u553r5_contact
                                        )");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'u553r5_fname'             => $u553r5_fname,
            'u553r5_lname'   					 => $u553r5_lname,
            'u553r5_mname'    				 => $u553r5_mname,
            'u553r5_email'       			 => $u553r5_email,
            'u553r5_contact'      		 => $u553r5_contact
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
}

if ($m3g4w0rld_5t4tu5 == "editusers"){
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("UPDATE u553r5 SET
			                                    u553r5_fname = :u553r5_fname,
			                                    u553r5_lname = :u553r5_lname,
			                                    u553r5_mname = :u553r5_mname,
			                                    u553r5_email = :u553r5_email,
																					u553r5_contact = :u553r5_contact
			                                    WHERE u553r5_id = $u553r5_key;
                                        ");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'u553r5_fname'           => $u553r5_fname,
            'u553r5_lname'   				 => $u553r5_lname,
            'u553r5_mname'   				 => $u553r5_mname,
            'u553r5_email'      		 => $u553r5_email,
						'u553r5_contact'				 => $u553r5_contact
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
}

if ($m3g4w0rld_5t4tu5_d3l3t3 == "deleteusers"){
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("DELETE FROM u553r5 WHERE u553r5_id = :u553r5_key_d3l3t3");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'u553r5_key_d3l3t3'      => $u553r5_key_d3l3t3
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
}

?>

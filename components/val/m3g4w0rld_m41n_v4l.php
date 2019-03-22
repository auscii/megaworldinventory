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

if (!empty($_SESSION['m364_p051t10n'])) {
    $m364_p051t10n = $_SESSION['m364_p051t10n'];
} else {
    $m364_p051t10n = "";
}






if (!empty($_POST['edit_pr0f1l3_fname'])) {
    $edit_pr0f1l3_fname = $_POST['edit_pr0f1l3_fname'];
} else {
    $edit_pr0f1l3_fname = "";
}

if (!empty($_POST['edit_pr0f1l3_mname'])) {
    $edit_pr0f1l3_mname = $_POST['edit_pr0f1l3_mname'];
} else {
    $edit_pr0f1l3_mname = "";
}

if (!empty($_POST['edit_pr0f1l3_lname'])) {
    $edit_pr0f1l3_lname = $_POST['edit_pr0f1l3_lname'];
} else {
    $edit_pr0f1l3_lname = "";
}

if (!empty($_POST['edit_pr0f1l3_contact'])) {
    $edit_pr0f1l3_contact = $_POST['edit_pr0f1l3_contact'];
} else {
    $edit_pr0f1l3_contact = "";
}

if (!empty($_POST['edit_pr0f1l3_email'])) {
    $edit_pr0f1l3_email = $_POST['edit_pr0f1l3_email'];
} else {
    $edit_pr0f1l3_email = "";
}

if (!empty($_POST['m3g4_ch4ng3_new_pa55'])) {
    $m3g4_ch4ng3_new_pa55 = $_POST['m3g4_ch4ng3_new_pa55'];
} else {
    $m3g4_ch4ng3_new_pa55 = "";
}

if (!empty($_POST['m3g4_ch4ng3_c0nfirm_pa55'])) {
    $m3g4_ch4ng3_c0nfirm_pa55 = $_POST['m3g4_ch4ng3_c0nfirm_pa55'];
} else {
    $m3g4_ch4ng3_c0nfirm_pa55 = "";
}

if (!empty($_POST['m3g4w0rld_editprofile_5t4tu5'])) {
    $m3g4w0rld_editprofile_5t4tu5 = $_POST['m3g4w0rld_editprofile_5t4tu5'];
} else {
    $m3g4w0rld_editprofile_5t4tu5 = "";
}

if (!empty($_POST['m3g4w0rld_editprofile_k3y'])) {
    $m3g4w0rld_editprofile_k3y = $_POST['m3g4w0rld_editprofile_k3y'];
} else {
    $m3g4w0rld_editprofile_k3y = "";
}


$sql_count = "SELECT count(*) FROM u553r5 WHERE u553r5_active = 0";
$res_count = $xcon->prepare($sql_count);
$res_count->execute();
$num_approv = $res_count->fetchColumn();

if ($m3g4w0rld_editprofile_5t4tu5 === "editprofileset") {
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("UPDATE u553r5 SET
                                           u553r5_fname = :u553r5_fname,
                                           u553r5_mname = :u553r5_mname,
                                           u553r5_lname = :u553r5_lname,
                                           u553r5_email = :u553r5_email,
                                           u553r5_contact = :u553r5_contact
                                           WHERE u553r5_id = $m3g4w0rld_editprofile_k3y;
                                        ");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'u553r5_fname'               => $edit_pr0f1l3_fname,
            'u553r5_mname'               => $edit_pr0f1l3_mname,
            'u553r5_lname'               => $edit_pr0f1l3_lname,
            'u553r5_email'               => $edit_pr0f1l3_email,
            'u553r5_contact'             => $edit_pr0f1l3_contact
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
    session_destroy();
    header("Location: ../index.php");
}


if (!empty($_POST['m3g4_ch4ng3_new_pa55'])) {
    $m3g4_ch4ng3_new_pa55 = $_POST['m3g4_ch4ng3_new_pa55'];
    $m3g4_ch4ng3_new_pa55 = hash("sha256", $m3g4_ch4ng3_new_pa55);
} else {
    $m3g4_ch4ng3_new_pa55 = "";
}

if (!empty($_POST['m3g4_ch4ng3_c0nfirm_pa55'])) {
    $m3g4_ch4ng3_c0nfirm_pa55 = $_POST['m3g4_ch4ng3_c0nfirm_pa55'];
    $m3g4_ch4ng3_c0nfirm_pa55 = hash("sha256", $m3g4_ch4ng3_c0nfirm_pa55);
} else {
    $m3g4_ch4ng3_c0nfirm_pa55 = "";
}

if (!empty($_POST['m3g4w0rld_ch4nge_5t4tu5'])) {
    $m3g4w0rld_ch4nge_5t4tu5 = $_POST['m3g4w0rld_ch4nge_5t4tu5'];
} else {
    $m3g4w0rld_ch4nge_5t4tu5 = "";
}

if (!empty($_POST['m3g4w0rld_ch4nge_k3y'])) {
    $m3g4w0rld_ch4nge_k3y = $_POST['m3g4w0rld_ch4nge_k3y'];
} else {
    $m3g4w0rld_ch4nge_k3y = "";
}

if ($m3g4w0rld_ch4nge_5t4tu5 === "changepassworduser") {
    if ($m3g4_ch4ng3_c0nfirm_pa55 === $m3g4_ch4ng3_new_pa55) {
    $m3g4w0rld_5t5t3m3nt = $xcon->prepare("UPDATE u553r5 SET
                                           u553r5_upass = :u553r5_upass
                                           WHERE u553r5_id = :m3g4w0rld_ch4nge_k3y;
                                        ");
    $m3g4w0rld_5t5t3m3nt->execute(
        array(
            'u553r5_upass'               => $m3g4_ch4ng3_new_pa55,
            'm3g4w0rld_ch4nge_k3y'       => $m3g4w0rld_ch4nge_k3y
        )
    );
    $m3g4w0rld_5t5t3m3nt->fetchAll();
    session_destroy();
    header("Location: ../index.php");
    }
}

?>

<?php
$recipient = "guillaumemaurin.gm@gmail.com";
$fmtMerci= implode("", file("merci.htt"));
$fmtMail= implode("", file("mail.htt"));

foreach($_POST as $key=> $val) {
$fmtMerci= str_replace("<$key>", $val, $fmtMerci);
$fmtMail= str_replace("<$key>", $val, $fmtMail);
}

if ($_POST["access"] == "stopspam") {
mail($recipient, $_POST["subject"], $fmtMail);
}

echo $fmtMerci;
?>

<?php
$msg = $_REQUEST["msg"];
$to = "gabofunebre@gmail.com";
$subject = "Mensaje flat - Log sitio web cerramientostechos.com.ar";

$status = @mail($to, $subject, $msg);
echo json_encode(["status"=>$status]);
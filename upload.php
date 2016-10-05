<?php
$typename = array("gif", "jpg", "png", "jpge");
var_dump($_FILES);
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if (($_FILES["file"]["type"] == "image/gif") ||
	($_FILES["file"]["type"] == "image/jpg") ||
	($_FILES["file"]["type"] == "image/png") ||
	($_FILES["file"]["type"] == "image/jpge") &&
	in_array($extension, $typename)
) {
	$taget = "uploads/";
	move_uploaded_file($_FILES["file"]["tmp_name"], $taget . $_FILES["file"]["name"]);
	echo "<h1>UPLOAD COMPLATE</h1>";
} else {
	echo "<h1>FILE NO IMAGE TYPE</h1>";
}
?>
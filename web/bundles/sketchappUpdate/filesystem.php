<?php

/* 
	----------------------------------------------------------------
	FILE MANAGER : 1.0.3 : 2014-11-04
	---------------------------------------------------------------- 
	SETUP:
		chmod 777 ./media/upload/
	---------------------------------------------------------------- 
*/

$basedir = "./media/upload";
$userdir = "username"; // logged in username
$document = "mydocument"; // document name
$targetdir = "{$basedir}/{$userdir}";
$created = Array();
//
@mkdir("{$targetdir}"); // create target dir}

/* MIME TYPES (supported formats)
-------------------------------------------------------- */
$mime = Array(
	"sketch"=> "application/zip",
	"json"=> "application/json",
	"svg"=> "image/svg+xml",
	"thumb.gif"=> "image/gif",
	"thumb.jpeg"=> "image/jpeg",
	"thumb.png"=> "image/png",
	"gif"=> "image/gif",
	"jpeg"=> "image/jpeg",
	"png"=> "image/png"
);

/* $_FILES (Binary upload)
-------------------------------------------------------- */
$useFILES = isset($_FILES) && count($_FILES);
if ($useFILES) { // blob
	foreach ($_FILES as $key=>$value) {
		$name = str_replace("_", ".", $key);
		$ext = array_pop((explode(".", $name)));
		if (!isset($mime[$ext])) continue;
		$tmp_name = $_FILES[$key]["tmp_name"];
		$md5 = md5_file($tmp_name);
 		$filepath = "{$targetdir}/{$document}.{$ext}";
// 		$filepath = "{$targetdir}/{$md5}.{$ext}";
		$created[] = $filepath;
		move_uploaded_file($tmp_name, $filepath);
	}
}

/* $_POST (UTF-8 upload)
-------------------------------------------------------- */
$usePOST = isset($_POST) && count($_POST);
if ($usePOST) { // string
	foreach ($_POST as $key=>$value) {
		$ext = str_replace("_", ".", $key);
		if (!isset($mime[$ext])) continue;
		list($type, $extension) = explode("/", $mime[$ext]);
		/// Base64 decode.
		if ($type === "image" && $ext !== "svg") {
			$split = explode(",", $value);
			$value = base64_decode($split[1]);
		}
		/// Put image data.
		$md5 = md5($value);
 		$filepath = "{$targetdir}/{$document}.{$ext}";
// 		$filepath = "{$targetdir}/{$md5}.{$ext}";
		$created[] = $filepath;
		file_put_contents($filepath, $value);
	}
}

if (isset($created)) {
	echo json_encode($created);
	exit;
}

/* filesystem.php?type=sketch&file=drawing
-------------------------------------------------------- */
if (isset($_GET) && !$usePOST && !$useFILES) {
	$format = isset($_GET["format"]) ? $_GET["format"] : "sketch";
	$file = "{$targetdir}.{$format}";
	$size = @filesize($file);
	if ($size) {
		header("Content-type: application/json");
		header("Content-length: $size");
		header("Content-xlength: $size");
		echo file_get_contents($file);
		exit;
	}
}

?>
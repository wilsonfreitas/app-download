<?php
if (isset($_REQUEST['wel-url'])) {
	$url = $_REQUEST['wel-url'];
} else {
	header('HTTP/1.1 500 Internal Server Error');
	trigger_error("Missing URL", E_USER_ERROR);
}

$handle = fopen($url, 'rb');
$handle or trigger_error("Download cvm file error: unable to download file for the given URL\n" . $url, E_USER_ERROR);
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);

header('Content-Type: application/zip');
echo "$contents";
?>

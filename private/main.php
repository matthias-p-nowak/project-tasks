<?php
error_log(__FILE__.':'.__LINE__. ' '. __FUNCTION__);

$iniPath = $ini ?? __DIR__ . '/example1.ini';
$cfg = parse_ini_file($iniPath);
$cfg = (object) $cfg;
// pretty-print the parsed config to the error log
error_log(__FILE__.':'.__LINE__. ' '. __FUNCTION__ . ' ' . print_r($cfg, true));


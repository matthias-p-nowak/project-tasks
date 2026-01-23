<?php
error_log(__FILE__.':'.__LINE__. ' '. __FUNCTION__);
// find out a working relative link
$ini = "example1.ini";
require '../private/main.php';

header('Content-Type: text/html; charset=UTF-8');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $cfg->title ?></title>
    <link rel="stylesheet" href="/main.css">
    </head>
    <body>
    </body>
</html>
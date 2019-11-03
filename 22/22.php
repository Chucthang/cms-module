﻿<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/22.less', 'css/22.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $url_path ?>/jqueryui/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/fontawesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/22.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $url_path ?>/jqueryui/jquery-ui.js"></script>


    <link rel="stylesheet" href="<?php echo $url_path ?>/swiper-5.0.2/package/css/swiper.min.css">
    <script src="<?php echo $url_path ?>/swiper-5.0.2/package/js/swiper.min.js"></script>

</head>

<body>
    <?php include './22-content.php'; ?>
    <script src="js/22.js"></script>

</body>

</html>
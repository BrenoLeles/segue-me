<?php
echo symlink($_SERVER['DOCUMENT_ROOT'] . '/../storage/app/public',$_SERVER['DOCUMENT_ROOT']) ? 'criou' : 'não criou';
echo "<br>";
echo __DIR__;
echo "<br>";
print_r(scandir(__DIR__));
echo "<br>";
print_r(scandir(__DIR__ . '../'));
echo "<br>";
print_r(scandir($_SERVER['DOCUMENT_ROOT'] . '/../'));
echo "<br>";
print_r(scandir($_SERVER['DOCUMENT_ROOT'] . '/../storage/app/public'));

?>
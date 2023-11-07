<?php
include './denar/des.php';
error_reporting(0);

$key = "somekey";
$ciphertext = DESEncrypt("SOMETEXT", $key);
$decrypt = DESDecrypt($ciphertext, $key);

print_r([
    "encrypted" => $ciphertext,
    "decrypted" => $decrypt,
]);

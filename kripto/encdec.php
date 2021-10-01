<?php 

// https://www.php.net/manual/en/function.openssl-get-cipher-methods.php
$encrypt_method = 'aes-128-cbc';

// https://www.php.net/manual/en/function.hash-algos.php
$key = hash('sha256', 'apadong');

// https://www.php.net/manual/en/function.hash-algos.php
$iv = substr(hash('sha256', 'kunciaku'), 0, 16);

// Text Bebas
$text = 'ini adalah plaintext';

// Encrypt
$encrypt = openssl_encrypt($text, $encrypt_method, $key, 0, $iv);


echo 'plaintext: ' . $text;
echo '<br><br>';
echo 'key: ' . $key;
echo '<br><br>';
echo 'iv: ' . $iv;
echo '<br><br>';
echo 'hasil: ' . $encrypt;


// Decrypt
$encrypted_text = $encrypt;
$decrypt = openssl_decrypt($encrypted_text, $encrypt_method, $key, 0, $iv);


echo '<br><br>';
echo '<br><br>';
echo 'chipertext: ' . $encrypted_text;
echo '<br><br>';
echo 'key: ' . $key;
echo '<br><br>';
echo 'iv: ' . $iv;
echo '<br><br>';
echo 'hasil: ' . $decrypt;

?>
<?php 

$config = array(

	'config'			 => 'C:\xampp\htdocs\kripto\openssl.cnf',

	'default_md'		 => 'sha512',

	'private_key_bits'	 => '512',

	'private_key_type'	 => 'OPENSSL_KEYTYPE_RSA',

);

// Key Pair
$keypair = openssl_pkey_new($config);

// Private Key
openssl_pkey_export($keypair, $privKey, null, $config);

// Public Key
$publickey = openssl_pkey_get_details($keypair);
$pubKey = $publickey['key'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<textarea cols="100" rows="30"><?php echo $privKey; ?></textarea>
	<textarea cols="100" rows="30"><?php echo $pubKey; ?></textarea>
</body>
</html>
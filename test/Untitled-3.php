/*//include ('/C')
require_once "../../../vendor/phpseclib/phpseclib/phpseclib/Crypt/RSA.php";
//require_once "Crypt/AES.php";

//Function for encrypting with RSA
function rsa_encrypt($string, $public_key)
{
    //Create an instance of the RSA cypher and load the key into it
    $cipher = new Crypt_RSA();
    $cipher->loadKey($public_key);
    //Set the encryption mode
    $cipher->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
    //Return the encrypted version
    return base64_encode($cipher->encrypt($string));
}

//Function for decrypting with RSA 
function rsa_decrypt($string, $private_key)
{
    //Create an instance of the RSA cypher and load the key into it
    $cipher = new Crypt_RSA();
    $cipher->loadKey($private_key);
    //Set the encryption mode
    $cipher->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
    //Return the decrypted version
    return $cipher->decrypt($string);
}


 $pubkey = 'MIGeMA0GCSqGSIb3DQEBAQUAA4GMADCBiAKBgGMZp7sIbEJA35tZNWPQNrRPZSZ0qZTBIO4uCGzhFsytQEclvAo170yGNxpaFX6P6RAhp+WsN5ueDL5h29spFOxXdlMyVBxX4pAVQTzCLoCt5gD1IWiLrkB+F+s+nI85/xJqiMhyeeUq1csLPn+lmra2J+01FnnZakAe0P/4+hUDAgMBAAE=';
 $privkey = 'MIICWgIBAAKBgGMZp7sIbEJA35tZNWPQNrRPZSZ0qZTBIO4uCGzhFsytQEclvAo170yGNxpaFX6P6RAhp+WsN5ueDL5h29spFOxXdlMyVBxX4pAVQTzCLoCt5gD1IWiLrkB+F+s+nI85/xJqiMhyeeUq1csLPn+lmra2J+01FnnZakAe0P/4+hUDAgMBAAECgYBc9Z/lTk1fCMO4UcJHUvU9xow3uo+ovlFJm1zD5ZEhhhMZqkftvBIxUmU2DvLCufQB8dAxHY88JtIFdH5r4umAbtlAS2QnwXaG+xF0Ywta2aUC7YYW0DDFoWld9w7R+JRn5lEcLLxTsJ741jUn5YgPzPpQ2gvtEj3ZxLmi3/rBIQJBAKJ4E7rliLL6nsQdxe/YJ76UqbdjeSwaN0TGbBztqHWKadQscKOUu/ucJA9qRhI/NBw4Ksj/keEKreliGPkIUf0CQQCcJpPuV/5XcSCIWrel8p1XMNc9K96GEviCB6i9H0gDTxhgjgDmwy3T6ui0+pf5zDBHTzqu/z2HGBzqrfNNcTL/AkB/fL3usGK+Hw8qUTqa5AD7+WfbscDJrKCl5RW89Xh1E3HLvjt9AR8pZvKc7gWiF9pqMmDQbEsqTdj+A64Y7EB5AkBJtYwu/ip5bFVHCEuYciYDenKf1Y19DIdyGdt1Ksb7iOKg8WdLhuajGkgu5fvHVrOTdbrl0GZi1ucPgH1RGRZRAkA4SpHK5N3/6n1aU4xzXh6CCsSeev9T71kou7qqYF/aNvGcAf558U6Tz1kyl/Oeu5WWEmo7skL1UBtOa/Z4P6iA';
$encdata = rsa_encrypt('kader',$pubkey);
echo $encdata;
$decdata = rsa_decrypt($encdata,$privkey);
echo $decdata;*/

//include('../../../vendor/phpseclib/phpseclib/phpseclib/Crypt/RSA.php');

/*$privatekey = file_get_contents('private.key');

$rsa = new Crypt_RSA();
$rsa->loadKey($privatekey);

$plaintext = new Math_BigInteger('aaaaaa');
echo $rsa->_exponentiate($plaintext)->toBytes();*/

$rsa = new Crypt_RSA();
$rsa->loadKey('...'); // public key

$plaintext = '...';

//$rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_OAEP);
$ciphertext = $rsa->encrypt($plaintext);

$rsa->loadKey('...'); // private key
echo $rsa->decrypt($ciphertext);


//include 'vendor/autoload.php';
<?php

require_once "Crypt/RSA.php";
require_once "Crypt/AES.php";

//Function for encrypting with RSA
function rsa_encrypt($string, $public_key)
{
    //Create an instance of the RSA cypher and load the key into it
    $cipher = new Crypt_RSA();
    $cipher->loadKey($public_key);
    //Set the encryption mode
    $cipher->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
    //Return the encrypted version
    return base64_decode($cipher->encrypt($string));
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

$private_key = "-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQCU+1bLfPmcY7qrF/dTbAtuJlv4R/FVc1WEH9HKU0jQjX/n/db9vz/x0i3te/bK
LNEcwUhBu+PWPnOt/qVURG9BUT6RsCRFUn0CyGiUKoy45o9K/mJAHmbrNtrUB6ckrYLF75Y50nUN
sBVHUDw8yQymmiOBT1gc/KM5s1xTz44LMwIDAQABAoGAGsiMtAyFu23ac0PdvOuhqm3O/vXAF0Ki
zxwBVURfxM6LfiOOcRPe5RSKGTW+Cl7AQVEmMlsa/LtBhLhQ9LNQ5L/4oTmRhCGiZZEmccAdjKsx
yMeaxkp+ZHvMxMKQNDgYg1CXqrCrpwwUuMUlA26tfxZ3xSFtFyDTaV9mgDQ1IGECQQCkX9Tum7D1
vQTwbhbYnu7eC4eUOaZeGWSEs2csK7U6vfZ3BzUZW/0tPqcSpQqcNxMtY9TiUsNRj1uM6jX3byp7
AkEA6Ab+wvOTNRtES77OAYG9gHGZZ+iXjQJ/6Z7JehN4p41UbDIf9nNUOLUPL9z5V1uOYnl1CWoo
Cw95cdhKXxEAqQJBAIU5Or6tp250ZdVslM27ewSyuY9UblfkIsk/EscFIdzbbDAqwkmsefW6yvTc
mU3lgYCPYlKRG8c19tCuX1ENY5MCQAz37x9YW975Ai01ofAFn2DheJCNOINCI4IcROiU1AaRaKmP
d6fftFJjFFE5iZovXNr2LOt0yn4rxD7vtuBvY9kCQGyty6YCB6qaD7qXPMhLrLbGajAIWd6ETgxv
frK/BJu+buPfDky/g1FhI5R9iMtL1xH0JYLJlaVocU+xSeA9DkY=
-----END RSA PRIVATE KEY-----";
//Public key
$public_key = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCU+1bLfPmcY7qrF/dTbAtuJlv4R/FVc1WEH9HK
U0jQjX/n/db9vz/x0i3te/bKLNEcwUhBu+PWPnOt/qVURG9BUT6RsCRFUn0CyGiUKoy45o9K/mJA
HmbrNtrUB6ckrYLF75Y50nUNsBVHUDw8yQymmiOBT1gc/KM5s1xTz44LMwIDAQAB
-----END PUBLIC KEY-----";
//Test out the rsa encryption functions
$plaintext = "This is some plaintext to encrypt";
$ciphertext = rsa_encrypt($plaintext, $public_key);
$decipheredtext = rsa_decrypt($ciphertext, $private_key);

//Echo out results
echo sprintf("<h4>Plaintext for RSA encryption:</h4><p>%s</p><h4>After encryption:</h4><p>%s</p><h4>After decryption:</h4><p>%s</p>", $plaintext, $ciphertext, $decipheredtext);
?>
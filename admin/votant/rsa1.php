<?php class MyEncryption
{

    public $pubkey = 'MIGeMA0GCSqGSIb3DQEBAQUAA4GMADCBiAKBgGMZp7sIbEJA35tZNWPQNrRPZSZ0qZTBIO4uCGzhFsytQEclvAo170yGNxpaFX6P6RAhp+WsN5ueDL5h29spFOxXdlMyVBxX4pAVQTzCLoCt5gD1IWiLrkB+F+s+nI85/xJqiMhyeeUq1csLPn+lmra2J+01FnnZakAe0P/4+hUDAgMBAAE=';
    public $privkey = 'MIICWgIBAAKBgGMZp7sIbEJA35tZNWPQNrRPZSZ0qZTBIO4uCGzhFsytQEclvAo170yGNxpaFX6P6RAhp+WsN5ueDL5h29spFOxXdlMyVBxX4pAVQTzCLoCt5gD1IWiLrkB+F+s+nI85/xJqiMhyeeUq1csLPn+lmra2J+01FnnZakAe0P/4+hUDAgMBAAECgYBc9Z/lTk1fCMO4UcJHUvU9xow3uo+ovlFJm1zD5ZEhhhMZqkftvBIxUmU2DvLCufQB8dAxHY88JtIFdH5r4umAbtlAS2QnwXaG+xF0Ywta2aUC7YYW0DDFoWld9w7R+JRn5lEcLLxTsJ741jUn5YgPzPpQ2gvtEj3ZxLmi3/rBIQJBAKJ4E7rliLL6nsQdxe/YJ76UqbdjeSwaN0TGbBztqHWKadQscKOUu/ucJA9qRhI/NBw4Ksj/keEKreliGPkIUf0CQQCcJpPuV/5XcSCIWrel8p1XMNc9K96GEviCB6i9H0gDTxhgjgDmwy3T6ui0+pf5zDBHTzqu/z2HGBzqrfNNcTL/AkB/fL3usGK+Hw8qUTqa5AD7+WfbscDJrKCl5RW89Xh1E3HLvjt9AR8pZvKc7gWiF9pqMmDQbEsqTdj+A64Y7EB5AkBJtYwu/ip5bFVHCEuYciYDenKf1Y19DIdyGdt1Ksb7iOKg8WdLhuajGkgu5fvHVrOTdbrl0GZi1ucPgH1RGRZRAkA4SpHK5N3/6n1aU4xzXh6CCsSeev9T71kou7qqYF/aNvGcAf558U6Tz1kyl/Oeu5WWEmo7skL1UBtOa/Z4P6iA';

    public function encrypt($data)
    {
        if (openssl_public_encrypt($data, $encrypted, $this->pubkey))
            $data = base64_encode($encrypted);
        else
            throw new Exception('Unable to encrypt data. Perhaps it is bigger than the key size?');

        return $data;
    }

    public function decrypt($data)
    {
        if (openssl_private_decrypt(base64_decode($data), $decrypted, $this->privkey))
            $data = $decrypted;
        else
            $data = '';

        return $data;
    }
}

$myenc = new MyEncryption();

$encdata = $myenc->encrypt('kader');
echo $encdata;
$decdata = $myenc->decrypt($encdata);
echo $decdata;
?>
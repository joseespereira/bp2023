<?php
define('AES_KEY','lFcoWW1Is7wcVzvN8x71quOsRfHl4NxV');
define('AES_IV','dCJ9GJYrU29pB44M');

function aes_encriptar($valor) 
{

    return bin2hex(openssl_encrypt($valor, 'aes-256-cbc',AES_KEY, OPENSSL_RAW_DATA,AES_IV));
}

function aes_desencriptar($hash)
{

    //verifca se a hash é valida
    if(strlen($hash) % 2 !=0){
        return -1;
    }
    return openssl_decrypt(hex2bin($hash), 'aes-256-cbc',AES_KEY, OPENSSL_RAW_DATA,AES_IV);
}

?>
<?php

    function encrypt($string)
    {
        $secret_key = 'biop_key';
        $secret_iv = 'biop_iv';

        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash('sha256', $secret_key);
        $iv = substr(hash( 'sha256', $secret_iv ), 0, 16);

        return base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
    }

    function decrypt($string)
    {
        $secret_key = 'biop_key';
        $secret_iv = 'biop_iv';

        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        return openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
?>
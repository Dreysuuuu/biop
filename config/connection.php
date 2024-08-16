<?php
    require_once ('MysqliDb.php');
    require_once ('cryptographer.php');

    date_default_timezone_set('Asia/Manila');
    
    $host = 'localhost';
    $username = 'biop_user';
    $password = '*Lr@wC17##rLn%^yqa$L';
    $database = 'biop_db';
    $prefix = 'biop_';

    $db = new MysqliDb($host, $username, $password, $database);
    $db->setPrefix($prefix);

    $db->connect();
    
    if (session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
?>
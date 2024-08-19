<?php
    include_once dirname(dirname(__FILE__)).'/config/connection.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $DB = MysqliDb::getInstance();

        if ($_POST['Method'] == 'Login')
        {
            $DB->where('EmailAddress', $_POST['EmailAddress']);
            $DB->where('Password', encrypt($_POST['Password']));
            
            $DATA = $DB->get('users');
    
            if ($DB->count > 0)
            {
                $_SESSION['User'] = $DATA[0];
            }
            else
            {
                $_SESSION['ALERT'] = Array(
                    'Type' => 'danger',
                    'Message' => 'Email Address or Password is incorrect.'
                );
            }
        }
        else if ($_POST['Method'] == 'Register')
        {
            $data = Array(
                'Role' => 'Client',
                'EmailAddress' => $_POST['EmailAddress'],
                'Password' => $_POST['Password'],
                'Active' => true,
                'CreatedAt' => date("Y-m-d h:i:s")
            );
    
            if (!$db->insert('users', $data))
            {
                $_SESSION['ALERT'] = Array(
                    'Type' => 'danger',
                    'Message' => 'Unable to register. Please try again.'
                );
            }
        }

        header('Location: ../index.php');
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        if (isset($_GET['Logout']))
        {
            $_SESSION['User'] = null;
            unset($_SESSION['User']);
            header('Location: ../index.php');
        }
    }
?>
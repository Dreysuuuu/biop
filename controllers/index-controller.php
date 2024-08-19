<?php
    include_once dirname(dirname(__FILE__)).'/config/connection.php';

    function GetActiveEvents()
    {
        $DB = MysqliDb::getInstance();
        
        $DB->where('Active', true);
        $DB->orderBy('CreatedAt', 'DESC');
        
        $DATA = $DB->get('events');

        if ($DB->count > 0)
        {
            return $DATA;
        }
        else
        {
            return array();
        }
    }

    function ActiveSession()
    {
        if (isset($_SESSION['User']))
        {
            if ($_SESSION['User'] != null)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
?>
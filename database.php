<?php
    $db_ip      = "127.0.0.1";
    $db_user    = "root";
    $db_pass    = "";
    $db_table   = "mabase"; // Mettez le nom que vous avez mis entre ""

    try
    {
        $db  = new PDO('mysql:host='.$db_ip.';dbname='.$db_table, $db_user, $db_pass);
    }
    catch (Exception $e)
    {
        try
        {
            $db  = new PDO('mysql:host=127.0.0.1;dbname='.$db_table, $db_user, $db_pass);
        }
        catch (Exception $e)
        {
            
           
        }
    }?>

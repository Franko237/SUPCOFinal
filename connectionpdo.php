<?php
    function connec($base,$param)
    {
        include_once($param.".php");
        $idconn=mysqli_connect(MYHOST,MYUSER,MYPASS);
        $dsn="mysql:host=".MYHOST.";dbname=".$base;
        $user=MYUSER;
        $pass=MYPASS;
        try
        {
            $idconn= new PDO($dsn,$user,$pass);
            return $idconn;
        }
        catch(PDOException $except)
        {
            echo "Echec de la connection".$except -> getMessage();
            return FALSE;
            exit();
        }
    }
?>
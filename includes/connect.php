<?php
    $host = "localhost";
    $database = "dbalaban";
    $user = "root";
    $password = "";
    $dsn = "mysql:host={$host};dbname={$database};";

    echo $dsn;

    try 
    {
        $con = new PDO($dsn, $user, $password);
        if ($con)
        {
            echo "Successfully connected to database.";
        }
    }
    catch (PDOException $th) 
    {
        echo $th->getMessage();
    }
?>
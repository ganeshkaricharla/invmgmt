<?php

    $con = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASS'],$_ENV['DB_SCHEMA']);


    if(!$con)
    {
        die('Please check Your Connection and Try again Later');
    }

?>

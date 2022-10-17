<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Make MySQLi throw exceptions.

    try {
        // Try Connect to the DB with new MySqli object - Params {hostname, userid, password, dbname}
        $link = new mysqli("10.129.2.41", "root", "", "test");
    } catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
        echo "MySQLi Error Code: " . $e->getCode() . "<br />";
        echo "Exception Msg: " . $e->getMessage();
        exit; // exit and close connection.
    }

    //No Exceptions were thrown, we connected successfully, yay!
    echo "Success, we connected without failure! <br />";
    echo "Connection Info: " . mysqli_get_host_info($link) . PHP_EOL;

    /*
     * Do some cool mysqli stuff...
     */
    
    mysqli_close($link); // finally, close the connection
    ?>

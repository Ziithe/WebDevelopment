<?php
function PDODBConnect($dbhost, $dbuser, $dbpass, $dbname) {
    try {
        $pdoconn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    } catch (PDOException $ex) {
        echo "Connection to DataBase could not be made! " . $ex->getMessage();
    }

    return $pdoconn;
}

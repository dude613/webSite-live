<?php

$hostname_dbsmart = "localhost";
$database_dbsmart = "c396form1";
$username_dbsmart = "c396usr_ap_db";
$password_dbsmart = "amo3622014";
$dbsmart = mysqli_connect($hostname_dbsmart, $username_dbsmart, $password_dbsmart) or trigger_error(mysqli_error($dbsmart), E_USER_ERROR);

if (!function_exists("GetSQLValueString")) {
    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
    {
        if (PHP_VERSION < 6) {
            $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
        }

        $hostname_dbsmart4 = "localhost";
        $database_dbsmart41 = "c396form1";
        $username_dbsmart4 = "c396usr_ap_db";
        $password_dbsmart4 = "amo3622014";
        $dbsmart4 = mysqli_connect($hostname_dbsmart4, $username_dbsmart4, $password_dbsmart4) or trigger_error(mysqli_error($dbsmart4), E_USER_ERROR);

        $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($dbsmart4, $theValue) : mysqli_escape_string($dbsmart4, $theValue);

        switch ($theType) {
            case "text":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "long":
            case "int":
                $theValue = ($theValue != "") ? intval($theValue) : "NULL";
                break;
            case "double":
                $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
                break;
            case "date":
                $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                break;
            case "defined":
                $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function get_ip_address()
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(', ', $_SERVER[$key]) as $ip) {
                if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                    return $ip;
                }
            }
        }
    }
}

if (!isset($_SESSION)) {
    session_start();
}
?>
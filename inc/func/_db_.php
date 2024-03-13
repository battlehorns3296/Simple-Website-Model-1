<?php

/************************************ */
/*    DATABASE CONNECTION DETAILS     */
/************************************ */

// The host address where your MySql Database is
$DB_HOST = "localhost";
// Your DB user name
$DB_USR = "username";
// Your DB user pass
$DB_PASS = "password";
// Your DB name
$DB_NAME = "database_name";

// Creating a new Class store it on $conn variable to be used on code to simplify connection to database to get or change data
$conn = new mysqli($DB_HOST, $DB_USR, $DB_PASS, $DB_NAME);

// Add a debug to retrieve errors if those appear
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

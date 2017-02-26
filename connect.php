<?php



// MySQL host
$servername = 'sql11.freemysqlhosting.net';
// MySQL username
$username = 'sql11160969';
// MySQL password
$password = 'EAR4JUTvAQ';
// Database name
$dbname = 'sql11160969';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




?>

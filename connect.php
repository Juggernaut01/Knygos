<?php



// MySQL host
$servername = 'sql11.freemysqlhosting.net';
// MySQL username
$username = 'sql11158399';
// MySQL password
$password = '2jQG7Y223Y';
// Database name
$dbname = 'sql11158399';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




?>
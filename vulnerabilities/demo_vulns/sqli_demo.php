<?php
/**
 * DEMO: SQL Injection (CWE-89)
 *
 * User controlled input is concatenated directly into a SQL query,
 * allowing an attacker to manipulate the executed statement.
 */

$id = $_GET[ 'id' ];

$conn = mysqli_connect( '127.0.0.1', 'dvwa', 'password', 'dvwa' );

// VULNERABLE: untrusted input concatenated into the query string.
$query  = "SELECT first_name, last_name FROM users WHERE user_id = '" . $id . "'";
$result = mysqli_query( $conn, $query );

while( $row = mysqli_fetch_assoc( $result ) ) {
	echo $row[ 'first_name' ] . ' ' . $row[ 'last_name' ] . "<br />";
}
?>

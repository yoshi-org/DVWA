<?php
/**
 * DEMO: Code Injection (CWE-94)
 *
 * User controlled input is passed directly into eval(), allowing an
 * attacker to execute arbitrary PHP code on the server.
 */

$expression = $_GET[ 'expression' ];

// VULNERABLE: untrusted input evaluated as PHP code.
$result = eval( 'return ' . $expression . ';' );

echo "Result: {$result}";
?>

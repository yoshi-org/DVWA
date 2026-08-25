<?php
/**
 * DEMO: Reflected Cross-Site Scripting (CWE-79)
 *
 * User controlled input is written directly into the HTML response
 * without encoding, allowing an attacker to inject script content.
 */

$name = $_GET[ 'name' ];

// VULNERABLE: untrusted input echoed back without output encoding.
echo "<div>Welcome back, {$name}!</div>";
?>

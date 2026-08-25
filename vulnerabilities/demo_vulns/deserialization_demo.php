<?php
/**
 * DEMO: Insecure Deserialization (CWE-502)
 *
 * A user controlled cookie value is passed directly to unserialize(),
 * allowing an attacker to craft objects that trigger PHP magic methods
 * (e.g. __wakeup()/__destruct()) and achieve object injection.
 */

$data = $_COOKIE[ 'session_data' ];

// VULNERABLE: untrusted input passed directly to unserialize().
$profile = unserialize( $data );

echo 'Loaded profile for: ' . $profile[ 'username' ];
?>

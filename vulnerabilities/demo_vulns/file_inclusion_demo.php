<?php
/**
 * DEMO: Local File Inclusion / Path Traversal (CWE-98 / CWE-22)
 *
 * User controlled input is used to build the path of a file that gets
 * included, allowing an attacker to include arbitrary local files
 * (or remote ones, if allow_url_include is enabled).
 */

$page = $_GET[ 'page' ];

// VULNERABLE: untrusted input used to build an include() path.
include( 'pages/' . $page );
?>

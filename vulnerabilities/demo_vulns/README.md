# Demo Vulnerabilities

This folder contains small, self-contained PHP scripts that intentionally
introduce common web application vulnerabilities. They exist purely to
demonstrate that the Psalm static analyzer (via its taint-analysis mode,
`psalm --taint-analysis`) can detect tainted data flowing from user input
into dangerous sinks.

**Do not use any of this code as a reference for secure coding practices.**

| File                          | Vulnerability                                   |
|--------------------------------|--------------------------------------------------|
| `code_injection.php`           | Code Injection (`eval()`) — CWE-94               |
| `sqli_demo.php`                 | SQL Injection — CWE-89                           |
| `xss_demo.php`                  | Reflected Cross-Site Scripting — CWE-79          |
| `file_inclusion_demo.php`       | Local File Inclusion / Path Traversal — CWE-98/22 |
| `deserialization_demo.php`      | Insecure Deserialization — CWE-502               |

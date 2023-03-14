<?php 
echo '<pre>';
print_r($_SERVER);
echo '</pre>';


/*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
    [HTTP_SEC_FETCH_SITE] => same-origin
    [HTTP_SEC_FETCH_MODE] => navigate
    [HTTP_SEC_FETCH_USER] => ?1
    [HTTP_SEC_FETCH_DEST] => document
    [HTTP_REFERER] => http://localhost/php4/
    [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
    [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.9
    [HTTP_COOKIE] => lang=english; PHPSESSID=0ulkrrf2420partpiir6to2vo7
    [PATH] => C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\nodejs\;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\Users\dr\AppData\Local\Microsoft\WindowsApps;C:\Users\dr\AppData\Roaming\npm;C:\Users\dr\AppData\Local\Programs\Microsoft VS Code\bin;C:\Users\dr\AppData\Roaming\Composer\vendor\bin
    [SystemRoot] => C:\Windows
    [COMSPEC] => C:\Windows\system32\cmd.exe
    [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
    [WINDIR] => C:\Windows
    [SERVER_SIGNATURE] => 
Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.0 Server at localhost Port 80


    [SERVER_SOFTWARE] => Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.0
    [SERVER_NAME] => localhost
    [SERVER_ADDR] => ::1
    [SERVER_PORT] => 80
    [REMOTE_ADDR] => ::1
    [DOCUMENT_ROOT] => C:/xampp/htdocs
    [REQUEST_SCHEME] => http
    [CONTEXT_PREFIX] => 
    [CONTEXT_DOCUMENT_ROOT] => C:/xampp/htdocs
    [SERVER_ADMIN] => postmaster@localhost
    [SCRIPT_FILENAME] => C:/xampp/htdocs/php4/server.php
    [REMOTE_PORT] => 50917
    [GATEWAY_INTERFACE] => CGI/1.1
    [SERVER_PROTOCOL] => HTTP/1.1
    [REQUEST_METHOD] => GET
    [QUERY_STRING] => 
    [REQUEST_URI] => /php4/server.php
    [SCRIPT_NAME] => /php4/server.php
    [PHP_SELF] => /php4/server.php
    [REQUEST_TIME_FLOAT] => 1678489784.1153
    [REQUEST_TIME] => 1678489784
)
/////////////////////////////////////////////////////////////

echo $_SERVER[REQUEST_URI] .'<br>';


[REQUEST_SCHEME] => http    //OR HTTPS  secure or non-secure
[REQUEST_METHOD] => GET //or post
[HTTP_HOST] => localhost
[SERVER_NAME] => localhost
[SERVER_PORT] => 80

[SERVER_ADDR] => ::1  //ip of server  //address
[REMOTE_ADDR] => ::1  //ip of user

[QUERY_STRING] => 
[REQUEST_URI] => /php4/server.php  //any thing after domain
[SCRIPT_NAME] => /php4/server.php 
[DOCUMENT_ROOT] => C:/xampp/htdocs


[MYSQL_HOME] => C:/xampp/mysql/bin  //path of data
[HTTP_SEC_CH_UA_PLATFORM] => "windows"
[SYSTEM_ROOT] => C:/windows
[SERVER_SOFTWARE] => Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.0
[REQUEST_TIME_FLOAT] => 1678489784.1153
[REQUEST_TIME] => 1678489784  //ms



[PHP_SELF] => /php4/server.php

//action="<?= $_SERVER['PHP_SELF']"?>

//<?= php echo
?>
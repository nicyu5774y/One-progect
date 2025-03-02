
Info:nick@nas326-server.zyxel.me
Go to Visit my site: https://nas326-server.zyxel.me

WhatsApp: NOT-POSSIBLE (IT,Italy)
<?php
$host = "you_host";
$user = "root";
$password = "password";
$db = "database";

$obj = new mysqli($host, $user, $password, $db);

//INSER
if (mysqli_connect_errno()) {
   printf("Connect failed: %­s\n", mysqli_connect_error());
   exit();
}

$ip = getenv("REMOTE_ADDR");
$server = getenv("SERVER_NAME");
//In caso di problemi sparatevi...(only italien guys)
$server2 = getenv("HTTP_HOST");
$server3 = getenv("HTTP_REFERER");
$server4 = getenv("HTTP_USER_AGENT");
$server5 = getenv("SCRIPT_NAME");
$server6 = getenv("GATEWAY_INTERFACE");
$server7 = getenv("SERVER_SOFTWARE");
$server8 = getenv("SERVER_PORT");
$server9 = getenv("REQUEST_METHOD");
$server10 = getenv("REQUEST_TIME");
$server11 = getenv("QUERY_STRING");
$server12 = getenv("HTTP_ACCEPT");
$server13 = getenv("HTTP_ACCEPT_CHARSET");
$server14 = getenv("HTTPS");
$server15 = getenv("SERVER_ADMIN");
$server16 = getenv("SERVER_SIGNATURE");
$server17 = getenv("PATH_TRANSLATED");
$server18 = getenv("SCRIPT_NAME");
$server19 = getenv("SCRIPT_URI");
$server20 = getenv("HTTP_headername");

$SQL = sprintf("INSERT INTO ip (ip, server, server2, server3, server4, server5, server6, server7, server8, server9,server10,server11,server12,server13,server14,server15,server16,server17,server18,server19,server20)
values('$ip','$server','$server2','$server3','$server4','$server5','$server6','$server7','$server8','$server9','$server10','$server11','$server12','$server13','$server14','$server15','$server16','$server17','$server18','$server19','$server20')");
$result = $obj->query($SQL);

if($result) {
echo "IP Registrato...";
} else {
echo "Errore nella Query <-> Reset...";
}
/*                                        ^
In caso non dovesse funzionare contact my |
*/

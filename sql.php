<!DOCTYPE html>
<html>
<body>

<?php
     $servername = "localhost";
     $username = "JunYe1993";
     $password = "ya1061625";

     // Create connection
     $conn = new mysqli($servername, $username, $password);

     // Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
     } 
     echo "Connected successfully";

     /*$db_server = "localhost";
     $db_user = "abcd";
     $db_passwd = "1234";
     $db_name = "wxyz";
     
     if(!@mysql_connect($db_server, $db_user, $db_passwd)){
          die("無法對資料庫連線");
     }
     
     mysql_query("SET NAMES utf8");
     
     if(!@mysql_select_db($db_name)){
          die("無法使用資料庫");
     }*/
?>

</body>
</html>
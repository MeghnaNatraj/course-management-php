<?php
include "db.inc";
session_start();
if($_SESSION["lp"]=="0") header('Location: start.php');
$un=$_SESSION["username"];
echo "<html>\n"; 
echo "\n"; 
echo "\n"; 
echo "<head>\n"; 
echo "\n"; 
echo "\n"; 
echo "<link rel=\"stylesheet\" type=\"text/css\"\n"; 
echo "\n"; 
echo "href=\"style.css\"/>\n"; 
echo "\n"; 
echo "\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "\n"; 
echo "<body>\n"; 
echo "\n"; 
echo "\n"; 
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>"; 
echo "<hr>"; 
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="TRUNCATE TABLE group_a;";
$result = mysql_query($sql) or die(mysql_error());
$sql="TRUNCATE TABLE group_b;";
$result = mysql_query($sql) or die(mysql_error());

echo "<h2>Values have been set to their initial values</h2>\n"; 
echo "<div>";

echo "<form action=\"admin_menu.php\">\n"; 
echo "<input type=\"SUBMIT\" value=\"BACK TO MENU\">\n"; 
echo "</input>\n"; 
echo "<br/>\n"; 
echo "</div>\n"; 
echo "</form>\n"; 
echo "</body>\n"; 
echo "\n"; 
echo "\n"; 
echo "</html>\n"; 
echo "\n";
?>
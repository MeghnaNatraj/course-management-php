<?php
include "db.inc";
session_start();
if($_SESSION["lp"]=="0") header('Location: start.php');
echo "<html>";  
echo "<head>"; 
echo "<link rel=\"stylesheet\" type=\"text/css\"";  
echo "href=\"style.css\"/>"; 
echo "</head>";  
echo "<body>"; 
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>\n";  
echo "<hr>"; 
echo "<h2>PREVIOUS ALLOTED</h2>";  
echo "<form action=\"allot_teacher.php\" method=\"GET\">\n";  
echo "<p>\n"; 
echo "<table border =\"3\" align=\"center\">";  
echo "<tr><th colspan=\"4\"> <h3> GROUP A </h3> </th></tr>\n"; 
echo "<tr> <th> SL.NO</th> \n"; 
echo "     <th> FACULTY NAME </th>\n"; 
echo "      <th> SUBJECT </th>\n";  
echo "</tr>\n"; 
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$count=1;
$sql="select * from teacher where subject IS NOT NULL order by sl_no ASC;";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
   
  
  echo "<tr>";
  echo "<td>$count</td> \n"; 
  echo "<td>$row[1]</td>\n"; 
  echo "<td>$row[2]</td>\n"; 
  echo "</tr>";
  $count++;
}
echo "</table>\n"; 
echo "</p>\n"; 
echo "<br/>\n";  
echo "<br/>\n"; 
echo "<h2>ALLOT TEACHERS</h2>";
echo "<p>\n"; 
echo "<table border =\"3\" align=\"center\">";  
echo "<tr>\n"; 
echo "  <th colspan=\"4\"> <h3> GROUP A </h3> </th> \n"; 
echo "   </tr>\n"; 
echo "<tr> <th> SL.NO</th> \n"; 
echo "     <th> FACULTY NAME </th>\n"; 
echo "      <th> SUBJECT </th>\n";  
echo "</tr>\n"; 
$sql="select * from teacher;";
$result = mysql_query($sql) or die(mysql_error());
$count=1;
while($row = mysql_fetch_array($result)) 
{
   
  
  echo "<tr>";
  echo "<td>$count</td> \n"; 
  echo "<td>$row[1]</td>\n"; 
  
    $sql2="select * from elective_subject;";
   $result2 = mysql_query($sql2) or die(mysql_error());
   echo "<td><select name=\"$row[0]\">"; 
   print("<option>NONE</option>");
   print("<option>DELETE</option>");
   while($row2 = mysql_fetch_array($result2)) 
   {
   
      print("<option>$row2[1]</option>");
   }
   echo "</select></td></tr>"; 
   echo "</tr>\n";
   $count++; 
}
echo "</table>\n"; 
echo "</p>\n"; 
echo "<br/>\n";  

echo "\n"; 
echo "<br/>\n"; 
echo "<div>\n"; 
echo "<input type=\"SUBMIT\" value=\"SUBMIT\">\n"; 
echo "</input>"; 
echo "</form>\n"; 
echo "<br/><br/>";  
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
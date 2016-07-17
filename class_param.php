<?php
include "db.inc";
session_start();
if($_SESSION["lp"]=="0") header('Location: start.php');
echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\"/>";
echo "</head>";
echo "<body>";
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>";
echo "<hr/>";
echo "<h2>PREVIOUS DETAILS</h2>";  
echo "<form action=\"allot_class_param.php\" method=\"GET\">\n";  
echo "<p><div>\n"; 
echo "<table border =\"3\" align=\"center\">";  
echo "<tr>\n"; 
echo "  <th colspan=\"4\"> <h3> GROUP A </h3> </th> \n"; 
echo "   </tr>\n"; 
echo "<tr> <th> SL.NO</th> \n"; 
echo "     <th> SUBJECT</th>\n"; 
echo "      <th> No. Of Classrooms </th>\n";  
echo "      <th> Max Strength Per Class </th>\n";
echo "</tr>\n"; 
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from elective_subject;";
$result = mysql_query($sql) or die(mysql_error());
$count=1;
while($row = mysql_fetch_array($result)) 
{
   
  echo "<tr>";
  echo "<td>$count</td> \n"; 
  echo "<td>$row[1]</td>\n"; 
  echo "<td>$row[4]</td>\n"; 
  echo "<td>$row[7]</td>\n"; 
echo "</tr>\n";
   $count++; 
}
echo "</table>\n"; 
echo "</p></div><br><br>";


echo "<h2>ALLOT CLASS DETAILS</h2>";  
echo "<p><div>\n";
echo "<table border =\"3\" align=\"center\">";  
echo "<tr>\n"; 
echo "  <th colspan=\"4\"> <h3> GROUP A </h3> </th> \n"; 
echo "   </tr>\n"; 
echo "<tr> <th> SL.NO</th> \n"; 
echo "     <th> SUBJECT</th>\n"; 
echo "      <th> No. Of Classrooms </th>\n";  
echo "      <th> Max Strength Per Class </th>\n";
echo "</tr>\n"; 
$con= mysql_connect("localhost", "root", "")or print("connection error");
mysql_select_db('7thsem') or print("Cannot db");
$sql="select * from elective_subject;";
$result = mysql_query($sql) or die(mysql_error());
$count=1;
while($row = mysql_fetch_array($result)) 
{
   
  echo "<tr>";
  echo "<td>$count</td> \n"; 
  echo "<td>$row[1]</td>\n"; 
  print("<td><input type=\"text\" name='$row[0]' value=\"0\" /></td>");
   print("<td><input type=\"text\" name='$row[0]2' value=\"0\" /></td>");
   echo "</tr>\n";
   $count++; 
}
echo "</table>\n"; 
echo "</p>\n"; 
echo "<br/>\n";  
echo "<input type=\"SUBMIT\" value=\"SUBMIT\">";
echo "</input>";
echo "</form>";
echo "<br/><br/>\n"; 
echo "<form action=\"edit.php\">";
echo "<input type=\"SUBMIT\" value=\"BACK TO EDIT\">";
echo "</input>";
echo "</form>";
echo "<br/>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
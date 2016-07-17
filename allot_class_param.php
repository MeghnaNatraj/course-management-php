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
echo "<form action=\"edit.php\">\n";  
echo "<p><div>\n"; 
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from elective_subject;";
$result = mysql_query($sql) or die(mysql_error());
$count=1;
while($row = mysql_fetch_array($result)) 
{
  
  $temp=$_GET[$row[0]];
  $temp2=$_GET[$row[0]."2"];
  
  $sql2="UPDATE elective_subject SET no_of_classes=$temp where  ecode='$row[0]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  $sql2="UPDATE elective_subject SET max_per_class=$temp2 where  ecode='$row[0]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
}
echo "</p>\n"; 
echo "<h2>The details have been successfully updated</h2>"; 
echo "<br/>\n";  
echo "<br/>\n"; 



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
$sql3="select * from elective_subject;";
$result3 = mysql_query($sql3) or die(mysql_error());
$count2=1;
while($row2 = mysql_fetch_array($result3)) 
{
   
  echo "<tr>";
  echo "<td>$count2</td> \n"; 
  echo "<td>$row2[1]</td>\n"; 
  echo "<td>$row2[4]</td>\n"; 
  echo "<td>$row2[7]</td>\n"; 
echo "</tr>\n";
   $count2++; 
}
echo "</table>\n"; 
echo "</p>\n"; 
echo "<br/>\n";  
echo "</form>";
echo "<br/>\n"; 
echo "</div>";







echo "<input type=\"SUBMIT\" value=\"BACK TO EDIT\">";
echo "</input>";
echo "</form>";
echo "<br/>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
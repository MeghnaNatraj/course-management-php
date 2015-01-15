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
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from teacher;";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  $temp=$_GET[$row[0]];
  if($temp!="NONE")
  {
    if($temp=="DELETE")
      
    {    
       $sql2="UPDATE teacher set subject=NULL where sl_no=$row[0];";
       $result2 = mysql_query($sql2) or die(mysql_error());
    }
    else 
    {    
       $sql2="UPDATE teacher set subject='$temp' where sl_no=$row[0];";
       $result2 = mysql_query($sql2) or die(mysql_error());
    }
  }
}
echo "<h2>The teachers have been alloted the subjects</h2>";
echo "<h2> THE ALLOTMENT IS AS FOLLOWS <h2> ";
  
echo "<p>\n"; 
echo "<table border =\"3\" align=\"center\">";  
echo "<tr><th colspan=\"4\"> <h3> GROUP A </h3> </th></tr>\n"; 
echo "<tr> <th> SL.NO</th> \n"; 
echo "     <th> FACULTY NAME </th>\n"; 
echo "      <th> SUBJECT </th>\n";  
echo "</tr>\n"; 
$con= mysql_connect("localhost", "root", "")or print("connection error");
mysql_select_db('7thsem') or print("Cannot db");

$sql="select * from teacher where subject IS NOT NULL order by sl_no ASC;";
$result = mysql_query($sql) or die(mysql_error());
$count=1;
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
echo "<br/><br/><div>";
echo "<form action=\"edit.php\">";
echo "<input type=\"SUBMIT\" value=\"BACK TO EDIT\">";
echo "</input>";
echo "</form>";
echo "<br/>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
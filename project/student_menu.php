<html>


<head>


<link rel="stylesheet" type="text/css"

href="style.css"/>


</head>


<body>


<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>


<hr/>


<br/>


<h2>STUDENT MENU</h2>
<br/>
<div>


<?php
include "db.inc";
session_start();
$un=$_SESSION["username"];
$_SESSION["error"]=0;
$_SESSION["success"]=1;
if($_SESSION["lp"]=="0") header('Location: start.php');

echo "<form action=\"elective_info.php\">";
echo "<input type=\"SUBMIT\" value=\"ELECTIVE INFORMATION\">";
echo "</input>";
echo "<br>";
echo "</form>";
echo "<br>";
$count=0;
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from group_a where gausn='$un'";
$result = mysql_query($sql) or die(mysql_error());
if($row = mysql_fetch_array($result)) 
{
  $count++;
}
if($count==0)
{
 echo "<form action=\"elective_preference.php\">";
 echo "<input type=\"submit\" value=\"CHOOSE ELECTIVES\">";
 echo "</input>";
 echo "<br>";
 echo "</form>";
 echo "<br>";
}
if($count>0)
{
 echo "<form action=\"view_submitted.php\">";
 echo "<input type=\"submit\" value=\"VIEW SELECTED\">";
 echo "</input>";
 echo "<br>";
 echo "</form>";
 echo "<br/>";
}
$sql="Select csubmit from student,coordinator where cbranch=sbranch and usn='$un'";
$result = mysql_query($sql) or die(mysql_error());
if($row = mysql_fetch_array($result)) 
{
   if($row[0]==1)
  { 
   echo "<form action=\"view_alloted.php\">";
   echo "<input type=\"submit\" value=\"VIEW ALLOTED\" >";
   echo "</input>";
   echo "<br>";
   echo "</form>";
   echo "<br>\n";
  }
}

echo "<form action=\"l.php\">";
echo "<input type=\"SUBMIT\" value=\"LOGOUT\">";
echo "</input>";
echo "<br>";
echo "</form>";
?>

</div>


</body>


</html>

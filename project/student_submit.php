<?php
include "db.inc";
session_start();
if($_SESSION["lp"]=="0") header('Location: start.php');
$un=$_SESSION["username"];
$pa1=$_GET['sa1'];
$pa2=$_GET['sa2'];
$pb1=$_GET['sb1'];
$pb2=$_GET['sb2'];
echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\"";
echo "href=\"style.css\"/>";
echo "</head>";
echo "<body>";
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>";
echo "<hr>";
if($pa1==$pa2||$pb1==$pb2)
{
  echo "<h2><p class=\"err\">ELECTIVES NOT ALLOTED</p></h2>";
 echo "<h2><p class=\"err\">You have chosen the same subjects for both the preferences.</p></h2>";
 echo "<h2>Please select again.</h2>";

}
else
{
  
 $con= mysql_connect($hostname,$username,$password)or print("connection error");
 mysql_select_db($database) or print("Cannot db");
 
  $sql="select * from group_a where gausn='$un'";
  $result = mysql_query($sql) ;
  $ent=0;
  while($row = mysql_fetch_array($result)) $ent++;

 if($ent==1) 
  { 
   print("<h2>YOU CANNOT SELECT YOUR ELECTIVES AGAIN. </h2>");
    print("<h2>(As have already selected your electives) </h2>");
   
  }
 else
 {
   $sql2="select count(*) from group_a;";
   $result2 = mysql_query($sql2) ;
   $row2 = mysql_fetch_array($result2);
   if($row2[0]==0)
     {

     $row2[0]=1;
     }
   else 

     {
         $sql="select max(FCFS) from group_a;";
         $result= mysql_query($sql) ;
         $row2 = mysql_fetch_array($result);
         $row2[0]++;

     }

   $sql3="insert into group_a(gausn,1st_pref,2nd_pref,FCFS) values('$un','$pa1','$pa2','$row2[0]');";
   $result3 = mysql_query($sql3) or die(mysql_error());


   $sql="insert into group_b(gbusn,1st_pref,2nd_pref,FCFS) values('$un','$pb1','$pb2','$row2[0]');";
   $result = mysql_query($sql) or die(mysql_error());
   $sql="select * from group_a where gausn='$un'";
   $result = mysql_query($sql) or die(mysql_error());
   while($row = mysql_fetch_array($result)) 
   {
        print("<div><h4>USN: &nbsp;&nbsp;$row[0] </h4></div>");
        print("<h3>SELECTED PREFERENCES FOR GROUP A</h3><br/>");
         print("<div><table border=\"2\" align =\"center\"><tr><th>PREFERENCE</th><th>OPTIONS</th></tr>");
        print("<tr><td>1</td><td>$row[1]</td></tr>");
         print("<tr><td>2</td><td>$row[2]</td></tr>");
          print("</table></div>");
   }
    $sql="select * from group_b where gbusn='$un'";
    $result = mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($result)) 
    {
           print("<br/><h3>SELECTED PREFERENCES FOR GROUP B</h3><br/>");
           print("<div><table border=\"2\" align =\"center\"><tr><th>PREFERENCE</th><th>OPTIONS</th></tr>");
           print("<tr><td>1</td><td>$row[1]</td></tr>");
           print("<tr><td>2</td><td>$row[2]</td></tr>");
           print("</table></div>");
     }


    echo "<h2>You have successfully submitted your preferences.</h2>";
   }
}

echo "<div><br/>";
echo "<form action=\"student_menu.php\">";
echo "<input type=\"SUBMIT\" value=\"Back to Menu\">";
echo "</input>";
echo "<br>";
echo "</div>";
echo "</form>";
echo "</body>";
echo "</html>";
?>
<?php
session_start();
if($_SESSION["lp"]=="0") header('Location: start.php');
include "db.inc";
$un=$_SESSION["username"];
echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\"/>";
echo "</head>";
echo "<body>\n";
echo "<form action=\"\">";
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>";
echo "<hr/>";
echo "<h2>You have successfully allotted electives.</h2>";
echo "<br>";

$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="UPDATE coordinator SET csubmit=1 where cuser_id='$un'";
$result = mysql_query($sql) or die(mysql_error());
$num1=0;
$num2=0;
$e1=array();
$e2=array();
$sql="select * from elective_subject where egroup='a'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  $e1[$num1]=$row[0];
  $num1++;
}

$sql="select * from elective_subject where egroup='b'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  $e2[$num2]=$row[0];
  $num2++;
}




//GROUP A
$sql="Select usn,1st_pref,2nd_pref from student,group_a where usn=gausn order by FCFS asc;";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
   foreach ($e1 as $temp)
   {
      
      $sql2="select * from elective_subject where ecode='$temp'";
      $result2 = mysql_query($sql2) or die(mysql_error());
      $row2 = mysql_fetch_array($result2);
      $sub_name=$row2[1];
      $tot=$row2[5];
      $max=intval($row2[4])*intval($row2[7]);

      
     if(isset($_GET[$temp])&&$row[1]==$sub_name&&$tot<$max) 
      {
          $sql2="Update student set group_a='$sub_name' where usn='$row[0]'";
          $result2 = mysql_query($sql2) or die(mysql_error());
          $tot++;
          $sql2="Update elective_subject set no_of_students=$tot where ecode='$temp'";
          $result2 = mysql_query($sql2) or die(mysql_error());
          
      }
   }
  $sql2="Select group_a from student where usn='$row[0]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  while($row2 = mysql_fetch_array($result2)) 
  {
   if($row2[0]==NULL) 
    {
      foreach ($e1 as $temp)
       {
          $sql3="select * from elective_subject where ecode='$temp'";
          $result3 = mysql_query($sql3) or die(mysql_error());
          $row3 = mysql_fetch_array($result3);
          $sub_name=$row3[1];
          $tot=$row3[5];
          $max=intval($row3[4])*intval($row3[7]);

          if(isset($_GET[$temp])&&$row[2]==$sub_name&&$tot<$max) 
          {
             $sql3="Update student set group_a='$sub_name' where usn='$row[0]'";
             $result3 = mysql_query($sql3) or die(mysql_error());
              $tot++;
              $sql3="Update elective_subject set no_of_students=$tot where ecode='$temp'";
             $result3 = mysql_query($sql3) or die(mysql_error());
          }
       }
    } 
  }
}
 
//GROUP B
$sql="Select usn,1st_pref,2nd_pref from student,group_b where usn=gbusn order by FCFS asc;";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
   foreach ($e2 as $temp)
   {
      $sql2="select * from elective_subject where ecode='$temp'";
      $result2 = mysql_query($sql2) or die(mysql_error());
      $row2 = mysql_fetch_array($result2);
      $sub_name=$row2[1];
      $tot=$row2[5];
      $max=intval($row2[4])*intval($row2[7]);
     if(isset($_GET[$temp])&&$row[1]==$sub_name&&$tot<$max) 
      {
          $sql2="Update student set group_b='$sub_name' where usn='$row[0]'";
          $result2 = mysql_query($sql2) or die(mysql_error());
           $tot++;
          $sql2="Update elective_subject set no_of_students=$tot where ecode='$temp'";
            $result2 = mysql_query($sql2) or die(mysql_error());
      }
   }
  $sql2="Select group_b from student where usn='$row[0]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  while($row2 = mysql_fetch_array($result2)) 
  {
    if($row2[0]==NULL) 
    {
       foreach ($e2 as $temp)
       {
           
          $sql3="select * from elective_subject where ecode='$temp'";
          $result3 = mysql_query($sql3) or die(mysql_error());
          $row3 = mysql_fetch_array($result3);
          $sub_name=$row3[1];
          $tot=$row3[5];
           $max=intval($row3[4])*intval($row3[7]);
          if(isset($_GET[$temp])&&$row[2]==$sub_name&&$tot<$max) 
          {
          $sql3="Update student set group_b='$sub_name' where usn='$row[0]'";
          $result3 = mysql_query($sql3) or die(mysql_error());
          $tot++;
          $sql3="Update elective_subject set no_of_students=$tot where ecode='$temp'";
          $result3 = mysql_query($sql3) or die(mysql_error());
          }
       }
    } 
  }
}


echo "</form>";
echo "<br/><div>";
echo "<form action=\"admin_menu.php\">";
echo "<input type=\"SUBMIT\" value=\"BACK TO MENU\">";
echo "</input></div>";
echo "<br/>";
echo "</form>";
echo "</body>";
echo "</html>";
?>
<html>
<head>
<title>Check</title>
</head>
<body>
<?php
session_start();

include "db.inc";
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
if (isset($_GET['uid'])&&isset($_GET['pwd']))

{
   $un = htmlspecialchars($_GET['uid']);
   $pwd = htmlspecialchars($_GET['pwd']);
   $flag=0;
   
   $sql="select * from login";
   $result = mysql_query($sql) or die(mysql_error());
   while($row = mysql_fetch_array($result)) 
  {
    if($row[0]==$un&&$row[1]==$pwd)
     {       
             $_SESSION["lp"]="1";
             $_SESSION["username"]=$un;
             if($row[2]=="coordinator")
            { 
               $flag=1;
               header('Location: admin_menu.php');
             }
            
            else  if($row[2]=="student")
             {  
                  $flag=1;
                  header('Location: student_menu.php');
          
             }
      }
   }
        if($flag==0)
      
             {   
                
                 $_SESSION["error"]=1;
                header('Location: l.php'); 
               
              }
}     
?>
</body>
</html>
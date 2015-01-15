<?php
session_start();
$e=$_SESSION["error"];
$s=$_SESSION["success"];
$_SESSION["lp"]="0";
echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\"/>";
echo "</head>";
echo "<body>";
echo "<img class =\"displayed\" src=\"head.jpg\">";
echo "</div><hr/>";
echo "<h2>ELECTIVE MANAGEMENT</h2>";
echo "<div>";
echo "<form action=\"login.php\" method=\"GET\" >";
echo "<br/>";
echo "User Name : &nbsp; &nbsp;<input type=\"text\" name=\"uid\" value=\"\" align=\"middle\">";
echo "<br><br>";
echo "Password : &nbsp; &nbsp; <input type=\"password\" name=\"pwd\" value=\"\" align=\"middle\">";
echo "<br><br>";
echo "<input type=\"submit\" value=\"Submit\" align=\"middle\">";
echo "</form>";
echo "<br/>";
echo "<br/>";
if($e==1)
{
 echo "<p class=\"err\">Invalid Login!</p>";
}
else if($s==1)
{
  echo "<p  class=\"success\">You have successfully logged out!</p>";
   
}
echo "</div> <div class=\"push\"></div></div><div class=\"footer\"><p><i><b>Done by : Greeshma , Meghna and Varsha</b></i></p></div>";
echo "</body>";
echo "</html>";
?>
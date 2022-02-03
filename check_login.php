<?php

//check_login.php

if(isset($_POST["username"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=ipl", "root", "");

 session_start();

 $query = "SELECT * FROM users WHERE username = '".$_POST['username']."'";

 $statement = $connect->prepare($query);

 $statement->execute();

 $total_row = $statement->rowCount();

 $output = '';

 if($total_row > 0)
 {
  $result = $statement->fetchAll();

  foreach($result as $row)
  {
//    if(password_verify($_POST["password"], $row["password"]))
   if ($_POST["password"] == $row["password"])
   {
    $_SESSION["name"] = $row["username"];
    $_SESSION["team"] = $row["faviplteam"];
    $_SESSION["batsman"] = $row["faviplbatsman"];
   }
   else
   {
    $output = '<label class="text-danger">Incorrect Password</label>';
   }
  }
 }
 else
 {
  $output = '<label class="text-danger">Invalid Email Address</label>';
 }

 echo $output;
}

?>
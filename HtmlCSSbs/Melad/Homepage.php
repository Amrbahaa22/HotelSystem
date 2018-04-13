<?php

require './project.php';

$username=$_POST['username'];
$password=$_POST['password'];
$ID      =$_POST['ID'];
$Age     =$_POST['Age'];
$database= new project();
if(isset($_POST['login'])&&!empty($username)&&!empty($password)&&!empty($Age)&&!empty($ID))
{
   $database->Insert($username,$pass,$ID,$Age,$ID);
}

?>
<html>
    <body>
        <form action="insert.php" method="POST">
        Username: <input type="text"     name="username"></br></br>
        Password: <input type="password" name="password"></br></br>
        Age     : <input type="number"   name="Age"     ></br></br>
        ID      : <input type="number"   name="ID"      ></br></br>
                  <input type="submit"   name="login"   value="Submit">
        </form>
    </body>
</html>
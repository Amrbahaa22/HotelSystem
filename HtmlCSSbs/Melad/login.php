<?php
if(isset($_GET['sub'])){
$username=$_GET['username'];
$password=$_GET['password'];
if(empty($username)){
    echo 'Enter a username';
}
if(empty($password)){
    echo'enter password';
}
if(strlen($password)>8){
    echo 'password must be less tha or equal to 8';
}
}echo"<a href='register.php'>register</a>"
?>
<htm>
    <body>
        <form action="register.php" method="get" >
            username  <input type="text" name="username" ><br>
            password  <input type="password" name="password"><br>
            <input type="submit" name="sub" value="login">
        </form> 
    </body>
</htm>


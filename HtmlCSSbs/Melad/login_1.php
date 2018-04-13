
<?php

  $errormessage="";
if(isset($_POST['sub'])){
    $name=$_POST['username'];
    $pass=$_POST['pass'];
    if(!isset($_COOKIE['username'])){
    setcookie("username", $name,  time()+(60*60));
    }
    if(empty($name)){
        $errormessage.="Please fill username field";
    }
    if(is_numeric ($name)){
        $errormessage.="please enter valid username(letters only)";
        
    }
   if(strlen($name)>10){
        $errormessage.="username must be lessthan or equal to 10";
    }
   if(empty($pass)){
        $errormessage.="Please fill pass field";
    }
    if(!is_numeric ($pass)){
        $errormessage.="please enter valid pass(numbers only)";
        }
    if(strlen($pass)>8){
        $errormessage.="pass must be lessthan or equal to 8";
    }
 
 
 }  
 if($errormessage==""){
     echo "ok";
}
?>

<html>
    <header>
        <title>
            Login page!
        </title>
    </header>
    <body onload="document.forms.login.username.focus();">
        <form name="login" action="login_1.php" method="post">
            <center>
            <table border="1">
                <tr >
                    <td>
                        <?php echo '<font color="red"> * means required</font>';?>
                         <br>
                         <br>
                    </td> 
                    <td>
                        <font face="arial" size="3">
                         <?php echo $errormessage;?>
                        </font>
                          <br>
                          <br>
               
                    </td>
              
                </tr>
                <tr >

                    <td>
                        <font size="4" >
                      UserName 
                      </font>
                    </td>
                    <td>
                        <input type="text" name="username" width="20"
                               
                               value=<?php if(isset($name))echo $name;?>
                               >&nbsp;<font color="red">*</font>
                 <br>
                 <br>
 
                    </td>
                </tr>
                <tr >
                    <td>
                        <font size="4">
                        Password
                        </font>
                        
                    </td>
                    <td>
                        <input type="password"name="pass" width="20"
                             value=<?php if(isset($pass))echo $pass;?>
                               >&nbsp;<font color="red">*</font>
                               <br>
                <br>
                    </td>
         
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="remember" value="r">  <font size="4">Remember me</font>
                    </td>
                </tr>
                <tr  bgcolor="orange">
                    <td>
                        <input type="submit" name="sub" value="Log in">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
            </center>
        </form>
    </body>
</html>
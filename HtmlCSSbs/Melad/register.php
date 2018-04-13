<?php


?>
<html>
    <hea>
        <title>
           registration page!
        </title>
    </hea>
    <body>
        <form action="getdata.php"  method="post" name="register">
            <input type="hidden" name="id" value="20090330">
            <table>
                <tr>
                    <td>
                     <?php   echo"<a href='logout.php'><u>LogOut</u></a>";?>
                    </td>
                </tr>
                <tr>
                    <td>
                      First name 
                    </td>
                    <td>
                        <input type="text" name="fname"maxlength="20" width="20"> 
                    </td>
                </tr>
                                <tr>
                    <td>
                      Last name  
                    </td>
                    <td>
                        <input type="text" name="lname"maxlength="20" width="20"> 
                    </td>
                </tr>
                                <tr>
                    <td>
                       Email 
                    </td>
                    <td>
                        <input type="email" name="email"maxlength="20" width="20"> 
                    </td>
                </tr>
                                <tr>
                    <td>
                       Gender 
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male" checked="checked"> Male<br>
                        <input type="radio" name="gender" value="female">Female
                    </td>
                    
                </tr>
                                <tr>
                    <td>
                       Department 
                    </td>
                    <td>
 <select name="dept"  >
 <option value="sel" >select dept</option>
  <option value="cs">cs</option>
  <option value="is">is</option>
  <option value="it">it</option>
  <option value="se">se</option>
</select>
  
                    </td>
                </tr>
                                                  <tr>
                    <td>
                    Message 
                    </td>
                    <td>
                       <textarea name="message" cols="20" rows="5" width="10">
                             Please write your message here !
                        </textarea>
                    </td>
                    
                </tr> 
                                           
                <tr>
                    <td>
                        Select your interested subjects
                    </td>
                    <td>
                        <input type="checkbox" name="subject[]" value="compiler">Compiler<br>
                        <input type="checkbox" name="subject[]" value="software Engineering"> software Engineering<br>
                        <input type="checkbox" name="subject[]" value="Artificial intelligence"> Artificial intelligence<br>
                        <input type="checkbox" name="subject[]" value="logic design">logic design<br>
                           
                    </td>
                </tr>
                     <tr>
                    <td>
                      
                    </td>
                    <td>
                        
                        <input type="submit" name="sub" value="register">
                    </td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>
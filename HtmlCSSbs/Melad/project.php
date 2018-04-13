<?php
class project
{
      private $user     ='root';
      private $host     ='localhost';
      //private $password ='4293';
      //private $dbname   ='Data';
    public function __construct()
    {
      $connect=mysql_connect($this->host,$this->user,$this->password);
      if($connect && mysql_select_db($this->dbname))
      {
        echo 'Done connection';
      }
      else echo mysql_error();
    }
    public function Insert($username,$pass,$age,$id)
    {
      echo 'Welcome '.$username.'  '.$password.' '.$Age.' '.$ID.'</br>';
      $query="INSERT INTO `info` VALUES ('$username','$id','$pass','$age')";
      if(mysql_query($query))
      {
            echo'Done Insertion';
      }
      else
      {
          echo mysql_error();
      }
    }
    public function search($username,$pass)
    {
            $query="SELECT `ID`,`age` FROM `info` WHERE `info`.`username`='$username' AND `info`.`Password`='$pass' ";
            $result=mysql_query($query); 
            $count=mysql_num_rows($result);
            //SELECT ID FROM `info` WHERE `Names` LIKE 'Amr' ORDER BY `password` DESC

            if($count>=1)
            {
                while($row = mysql_fetch_assoc($result )) {
                    echo "id: " . $row['ID']. " - Age: " . $row['age'];
                }
            }
            else
            {
                echo 'Error';
            }
            echo '</br>';
            echo"<a href='new.php'>register</a>";
            mysql_free_result($result);
    } 
}
?>
<?php
  class customerstable
  {
      private $hostname="localhost";
      private $username="root";
      private $dbName='HotelSystem';
      public function __construct()
      {
          $connect=mysql_connect($this->hostname,$this->username,'mysql');
         if($connect && mysql_select_db($this->dbName))
         {
             echo 'Done connection';
         }
         else
         {
             echo mysql_error();
         }
      }
      public function Insert($ID,$Name,$Username,$Password,$email,$Phone,$Gender,$nationality,$Birthday,$SSN)
      {
          $query="INSERT INTO `customers` VALUES('$ID','$Name','$Username','$Password','$email','$Phone','$Gender','$nationality','$Birthday','$SSN') ";
          if(mysql_query($query))
          {
              echo'Done Insertion';
          }
          else
          {
              echo 'Error';
          }
      }
      public function Update($ID,$Name,$Username,$Password,$email,$Phone,$Gender,$nationality,$Birthday,$SSN)
      {
          $query="UPDATE
          `customers` SET `ID`='$ID' ,
          `Name`='$Name' ,`
          Username`='$Username',
          `Password`='$Password',
          `email`='$email',
          `Phone`='$Phone',
          `Gender`='$Gender',
          `nationality`='$nationality',
          `Birthday` = '$Birthday'
          WHERE `SSN` ='$SSN' 
          "
          if(mysql_query($query))
          {
              echo 'Update done successfully'
          }
          else
          {
              echo 'Error';
          }
      }
  }
 
?>
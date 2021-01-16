<?php

//$mobile=$_SESSION['number'];
require_once "dbclass.php";

class tbluser {
    public $conn;
     public function __construct(){
        $dbcon=new Dbcon();
         $this->conn=$dbcon->createConnection();
        
     }
     //function for inserting the signup data in to database
     public function usersignup($name,$email,$mobile,$securityquestion,$answer,$password){
    //    $sql="INSERT INTO `tbl_user`(`email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) 
    //    VALUES ('$email','$name','$mobile',0,0,0,0,NOW(),'$password','$securityquestion','$answer')";
    $sql = "INSERT INTO tbl_user(`email`, `name`,`mobile`,`sign_up_date`,`password`,`security_question`,`security_answer`)
               VALUES ('$email','$name','$mobile', NOW(),'$password','$securityquestion','$answer')";
    //    echo $this->conn;
    //    die('ok');
            if ($this->conn->query($sql)==true){
                echo '<script>alert("inserted Successfully please login to buy products")</script>';
               // header('location: login.php');
            }
     }

     //duplication 
     public function duplicatedetail($email,$mobile){
            $sql="SELECT * FROM tbl_user";
            $data=$this->conn->query($sql);
            if($data->num_rows>0){
                while($row=$data->fetch_assoc()){
                    if ($row['email']==$email || $row['mobile']==$mobile) {
                        return true;
                        echo"hyy";
                    }
                }
                return false;
            }
     }

 //login
//  public function userLogin($email, $password)
//  {
//      $sql="SELECT * FROM `tbl_user` WHERE `email`='$email' 
//      AND `password`='$password'";
//      $data=$this->conn->query($sql);
//      if ($data->num_rows>0) {
//          $row=$data->fetch_assoc();
//          if ($row['is_admin']==0 && $row['active']==1) {
//              $_SESSION['user']=array($row['email'],$row['id']);
//              header('Location:index.php');
//          } elseif ($row['is_admin']==1 && $row['active']==1) {
//              $_SESSION['admin']=array($row['id'],$row['email'],$row['name']);
//              header('Location:admin/index.php');
//          } else {
//              return $row;
//          }
//      }
//      return false;
//  } 
    
}

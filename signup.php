
<?php
require_once "userclass.php";
require_once "dbclass.php";

//header
include 'header.php' ;
if (isset($_SESSION['admin'])){
    header('location: admin/index.php');
}
$success="";
$error="";
$user =new tbluser();
 

if (isset($_POST['submit'])){
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $mobile=$_SESSION['number'];
    $securityquestion=trim($_POST['securityquestion']);
    $answer=trim($_POST['answer']);
    $password=md5($_POST['password']);
     $duplicate=$user->duplicatedetail($email,$mobile);
    if($duplicate){
       echo $error="email or mobile number already exists you can login using login credentials";
    }else{
        echo $error="signup  completed";
        
    }
    $user->usersignup($name,$email,$mobile,$password,$securityquestion,$answer );
    }

   
       
    
?>
<div class="content">
    <!-- registration -->
    <div class="main-1">
        <div class="container">
            <div class="register">
                <form method="POST" action="">
                    <div class="register-top-grid">
                        <h3>personal information</h3>
                        <div>
                            <span>User Name<label>*</label></span>
                            <input type="text" name="name" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$" placeholder="Enter Name" required>
                        </div>
                        <div>
                            <span>Email Address<label>*</label></span>
                            <input type="email" name="email" id="email" pattern="^(?!.*\.{2})[a-zA-Z0-9.]+@[a-zA-Z]+(?:\.[a-zA-Z]+)*$" placeholder="Enter Email" required>
                          
                        </div>
                        <div>
                        <span>Mobile number</span>
                        <input type="number" id="mobile" name="mobile" value="<?php echo $_SESSION['number']; ?>">
                        </div>
                        <div>
                            <select name="securityquestion" id="sel" style="margin-bottom:2px;">
                                <option selected>Security Question</option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
                                <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                                <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                                <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                            </select><label>*</label>
                            <input type="text" name="answer" pattern="^([A-Za-z0-9]+ )+[A-Za-z0-9]+$|^[A-Za-z0-9]+$" placeholder="Enter Security Answer" required>
                        </div>
                        <div class="clearfix"> </div>
                        <a class="news-letter" href="#">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked="" required><i></i>Sign Up for Newsletter</label>
                        </a>
                    </div>
                    <div class="register-bottom-grid">
                        <h3>login information</h3>
                        <div>
                            <span>Password<label>*</label></span>
                            <input type="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$" class="password" name="pass" minlength="8" maxlength="16" required>
                        </div>
                        <div>
                            <span>Confirm Password<label>*</label></span>
                            <input type="password" name="repassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$" class="password" name="confirmpass" minlength="8" maxlength="16" required>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="register-but">
                        <input type="submit" value="submit" name="submit" onclick="validateForm()">
                        <div class="clearfix"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script>
    function validateForm(){
            var name=($('#name').val()).trim();
            var email=($('#email').val()).trim();
            var mobile=($('#mobile').val()).trim();
            var security_question=($('#securityquestion').val()).trim();
            var answer=($('#answer').val()).trim();
            var password=($('#password').val()).trim();
            var repassword=($('#repassword').val()).trim();
            var regName=/^([a-zA-Z]+\s?)*$/;
            var regPassword=/^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;
            var regMobile=/^(0)?[1-9]{1}[0-9]{9}$/;
            var regEmail=/^[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
            if (name=="" || email=="" || mobile=="" || security_question=="" || answer=="" || password=="" || repassword=="") {
                alert("all fields are mandatory including security question and answer kindly choose one question and answer that!");
                return false;
            }
            else if (!(name.match(regName))){
                alert("Please enter valid name");
                return false;
            }
            else if (!(password.match(regPassword))) {
                alert("password criteria does not matched");
                return false;
            }
            else if (!(email.match(regEmail))) {
                alert("email criteria doesn't match");
                return false;
            }
            else if (!(mobile.match(regMobile))) {
                alert("Please enter valid mobile number");
                return false;
            }
            else if (password!=repassword) {
                alert("please enter same password and repassword");
                return false;
            }
            else if (!isNaN(answer)) {
                alert("please enter valid answers i.e, only digits are not allowed");
                return false;
            }
            return true;
        }
    </script>
				
<!--footer
<?php
include 'footer.php';

?>
footer!>
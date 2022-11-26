<?php
session_start();
require("db.class.php");
$ob=new db_operations();
$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['password']=$_POST['password'];
   $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password = $_POST["password"];
  echo $email;
   $sel1="select * from registration where email='$email'";
    $sel2="select * from registration where phone='$phone'";
   $res1=$ob->db_read($sel1);
   $res2=$ob->db_read($sel2);
   if(mysqli_num_rows($res1))
      {
         ?>
         </script>;
         <script>
            alert("User already exist");
            window.location='sellerreg.php'
         </script>;
         <?php
      }
      if(mysqli_num_rows($res2))
      {?>
         <script>
            alert("mobile number already exists");
            window.location='sellerreg.php'
         </script>;
         <?php
      }
        
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                // $result = mysqli_query($connect, "INSERT INTO login (email, password, status) VALUES ('$email', '$password_hash', 0)");
    
                // if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['email'] = $email;
                    //require "Mail/phpmailer/PHPMailerAutoload.php";
                    //$mail = new PHPMailer;
    
                    //$mail->isSMTP();
                    //$mail->Host='smtp.gmail.com';
                    //$mail->Port=587;
                    //$mail->SMTPAuth=true;
                    //$mail->SMTPSecure='tls';
    
                    //$mail->Username='artefactsearchsystem@gmail.com';
                    //$mail->Password='svznxaoaicifmnvg';
    
                    //$mail->setFrom('email account', 'OTP Verification');
                    //$mail->addAddress($_POST["email"]);
    
                    //$mail->isHTML(true);
                    mail("$email","Your verification code","<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>Classimax Team</b>
                    localhost/project/project/mainhome/index.php");
                    // $mail->Subject="Your verify code";
                    // $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    // <br><br>
                    // <p>With regrads,</p>
                    // <b>Classimax Team</b>
                    // localhost/project/project/mainhome/index.php";
    
                            
                                ?>
                                <script>
                                    alert("<?php echo "OTP Send Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                                    
      ?>

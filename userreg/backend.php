<?php
session_start();
?>
<html>
<head>
    </head>
    <body>
    <?php
    require("db.class.php");
    $ob=new db_operations();
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $sel1="select * from userreg where email='$email'";
    $sel2="select * from userreg where phone='$phone'";
   $res1=$ob->db_read($sel1);
   $res2=$ob->db_read($sel2);
   if(mysqli_num_rows($res1))
      {
         ?>
         </script>;
         <script>
            alert("User already exist");
            window.location='userreg.php'
         </script>;
         <?php
      }
   else if(mysqli_num_rows($res2))
      {?>
         <script>
            alert("mobile number already exists");
            window.location='userreg.php'
         </script>;
         <?php
      }
   else
   {
    $insertl= "insert into login(email,password,usertype) values('$email','$password',0)";
    $insertr= "insert into userreg(fname,lname,email,phone,password) 
    values('$fname','$lname','$email','$phone','$password')";
    $insertreg= "insert into registration(email,phone) values('$email','$phone')";
    echo $insertl;
    $resl=$ob->db_write($insertl);
    $resr=$ob->db_write($insertr);
            if(!$resl || !$resr)
            {
               $ob->db_write("delete from login where email='$email' ");
               $ob->db_write("delete from userreg where email='$email' ");
               $ob->db_write("delete from registration where email='$email'");
                ?>
                <script>
                    alert("Account creation failed");
                    window.location='userreg.php'
                </script>;
                <?php
                }
                else
                {
                $ob->db_write($insertl);
                $ob->db_write($insertr);
                $ob->db_write($insertreg);
                header("location:../login/login.php");
                ?>
                <script>
                    alert("Registration Successfully");
                    
                </script>;
                <?php
                }
                

      }
      ?>
            </body>
            </html>

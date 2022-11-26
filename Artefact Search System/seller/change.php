<?php
      session_start();
  		require("db.class.php");
  		$ob=new db_operations();
  		$email=$_SESSION['email'];
  		$usertype="select * from login where email='$email'";
  		$user=$ob->db_read($usertype);
  		$arr=mysqli_fetch_array($user);
  		$pass=$arr['password'];
  		$password1=$_POST['password'];
      $npassword=$_POST['npassword'];
      $cpassword=$_POST['cpassword'];
      if($pass != $password1)
      {
        ?>
        <script>
          alert("Incorrect Current Password..");
          header("Location:../seller/changepassword.php"); 
        </script>
        <?php
      }
      else
      {
  			if ($arr['2']==1) {
  				$sel1="update sellerreg set password='$npassword' where email='$email'";
  				$res1=$ob->db_read($sel1);
  			}

  			$sel2="update login set password='$npassword' where email='$email'";
  			$res2=$ob->db_read($sel2);
  			header("Location:../seller/login.php");
  		}
  		?>
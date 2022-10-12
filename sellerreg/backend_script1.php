<?php
include('database.php');
// Fetching state data
$country_id=!empty($_POST['country_id'])?$_POST['country_id']:'';
if(!empty($country_id))
  {
        $contryData="SELECT state_id, state_name from state WHERE country_id=$country_id";
        $result=mysqli_query($conn,$contryData);
        if(mysqli_num_rows($result)>0)
        {
          echo "<option value=''>Select State</option>";
          while($arr=mysqli_fetch_assoc($result))
          {
            echo "<option value='".$arr['state_id']."'>".$arr['state_name']."</option><br>";
        
          }
        }  
   }
   // Fetching city data
$state_id=!empty($_POST['state_id'])?$_POST['state_id']:'';
if(!empty($state_id))
  {
        $cityData="SELECT city_id, city_name from city WHERE state_id=$state_id";
        $result=mysqli_query($conn,$cityData);
        if(mysqli_num_rows($result)>0)
        {
          echo "<option value=''>Select City</option>";
          while($arr=mysqli_fetch_assoc($result))
          {
            echo "<option value='".$arr['city_id']."'>".$arr['city_name']."</option><br>";
        
          }
        }  
   }
   
         ?>
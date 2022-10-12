<?php
include('db.class.php');
$ob=new db_operations();
$country_id=!empty($_POST['country_id'])?$_POST['country_id']:'';
if(!empty($country_id))
{
  $contryData="select * from state where country_id in(select country_id from country where country_name='$country_id')";
  echo $contryData;
  $result=$ob->db_read($contryData);
  if(mysqli_num_rows($result)>0)
  {
    echo "<option value=''>State</option>";
    while($arr=mysqli_fetch_assoc($result))
    {
      echo "<option value='".$arr['state_name']."'>".$arr['state_name']."</option><br>";
    }
  }
}
   // Fetching city data
$state_id=!empty($_POST['state_id'])?$_POST['state_id']:'';
if(!empty($state_id))
{
  $districtData="select * from city where state_id in(select state_id from state where state_name='$state_id')";
  $result=$ob->db_read($districtData);
  if(mysqli_num_rows($result)>0)
  {
    echo "<option value=''>City</option>";
    while($arr=mysqli_fetch_assoc($result))
    {
      echo "<option value='".$arr['city_name']."'>".$arr['city_name']."</option><br>";
    }
  }
}
?>
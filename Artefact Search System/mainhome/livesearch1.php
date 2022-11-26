<?php
require("db.class.php");
$ob=new db_operations();
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $query1="select * from category";
    $result=mysqli_query($conn,$query1);
    echo "hello";
    ?>
    
                          <!-- <thead class=" text-primary">
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product ID</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product Title</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Product image</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">Brand</th>
                            <th style="font-weight: bold;color: black;font-size: 1em;text-align: center;">View More</th>
                          </thead> -->
      
                          <tbody>
                            <?php
                                        while($row=mysqli_fetch_assoc($result)){
                                        //$id=$row['catid'];
                                        $catname=$row['catname'];
                                        
                                        //$img=$row['img'];

                                        $conn1=mysqli_connect("localhost","root","","$catname");
                                        
                                        $query2="select * from productdet where CONCAT(prodtype,prodtitle,proddesc,prodkeyword) like '{$input}%'";
                                        //echo $query2;
                                        $result1=mysqli_query($conn1,$query2);
                                        if(mysqli_num_rows($result1)>0){
                                            
                                            while($rows=mysqli_fetch_assoc($result1))
                                            {
                                                $pid=$rows['pid'];
                                                $prodtype=$rows['prodtype'];
                                                $prodtitle=$rows['prodtitle'];
                                                $brand=$rows['brand'];
                                                $proddesc=$rows['proddesc'];
                                                $prodkeyword=$rows['prodkeyword'];
                                                $color=$rows['color'];
                                                $price=$rows['price'];
                                                $img1=$rows['img1'];
                                                $img2=$rows['img2'];
                                                $img3=$rows['img3'];
                                                $stockstatus=$rows['stockstatus'];
                                                $availableat=$rows['availableat'];
                                                $status=$rows['status']; 
                    
                                    ?>
                            <table class="table" border="1">
                            <tr>
                              <!-- <td><center style="font-size: 1.1em;color: #282828;"><?php echo $pid; ?></center></td> -->
                                
                               <!-- <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><?php echo $prodtitle; ?></center></td> -->

                              <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><img src="../seller/assets/images/products/<?php echo $img1; ?>" style="width: 100px;" alt="Product image" class="product-image"></center></td>

                              <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;">Product title : <?php echo $prodtitle; ?><br>Brand : <?php echo $brand; ?><br><form method="post" action="../admin/viewproduct.php?pid=<?php echo $pid ?>"><td><center style="font-size: 1.1em;color: #282828;"><button class="btn btn-outline-primary-2">View More</button></center></td></form></center></td>

                              <!-- <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><?php echo $brand; ?></center></td> -->

                              <!-- <form method="post" action="../admin/viewproduct.php?pid=<?php echo $pid ?>"><td><center style="font-size: 1.1em;color: #282828;"><button class="btn btn-outline-primary-2">View More</button></center></td></form> -->
                            </tr>
                        </table>
                              <?php 
                               
                                }
                                }
                                
                              ?>

                          </tbody>  
                      <!--   </table> -->
                        <?php
	} }else{
		echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
	}
$conn1->close();
?>     

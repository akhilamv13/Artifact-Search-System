<?php
    require("db.class.php");
    $ob=new db_operations();
    if(isset($_POST['input'])){
    $input=$_POST['input'];
    $query1="select * from category";
    $result=mysqli_query($conn,$query1);
    ?>
    <br><br>
    <!-- <div class="gallery-grids-top">
                <div class="gallery-grids">
                    <center><div class="row">
                        <table> -->
                        <table class="table" border="1">
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
                                    <!-- <td><center style="font-size: 1.1em;color: #282828;"><?php echo $pid; ?></center></td> -->
                        
                               <!-- <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><?php echo $prodtitle; ?></center></td> -->
                               <tr>
                              <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><img src="../seller/assets/images/products/<?php echo $img1; ?>" style="width: 100px;" alt="Product image" class="product-image"></center></td>
                              
                              <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;">Product title : <?php echo $prodtitle; ?><br>Brand : <?php echo $brand; ?><br><form method="post" action="../admin/viewproduct.php?pid=<?php echo $pid ?>"><td><center style="font-size: 1.1em;color: #282828;"><button class="btn btn-outline-primary-2">View More</button></center></td></form></center></td>
                          </tr>

                              <!-- <td><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><?php echo $brand; ?></center></td> -->

                              <!-- <form method="post" action="../admin/viewproduct.php?pid=<?php echo $pid ?>"><td><center style="font-size: 1.1em;color: #282828;"><button class="btn btn-outline-primary-2">View More</button></center></td></form> -->
                         <!-- <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="">
                            <div class="product product-7 text-center">
                            <figure class="product-media">
                                                <a href="../mainhome/productview.php?pid=<?php echo $pid?>">
                                                    <img src="../seller/assets/images/products/<?php echo $img1; ?>" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action">
                                                    <a href="../mainhome/productview.php?pid=<?php echo $pid?>" class="btn-product btn-quickview"><span><?php echo $prodtype ?></span></a>

                                                </div -->><!-- End .product-action -->
                            <!-- </figure> --><!-- End .product-media -->
                           <!--  <div class="product-body">
                                                <div class="product-cat">  
                                                    <a href="#"><?php echo $prodtype ?></a>
                                                </div> --><!-- End .product-cat -->
                                                <!-- <h3 class="product-title"><a href="../mainhome/productview.php?pid=<?php echo $pid?>"><?php echo $prodtitle ?></a></h3> --><!-- End .product-title -->
                                                <!-- <div class="product-price">
                                                    RS.<?php echo $price ?>/-
                                                </div> --><!-- End .product-price -->

                                                <!-- <div class="product-nav product-nav-thumbs">
                                                    <a href="#" class="active">
                                                        <img src="../seller/assets/images/products/<?php echo $img1 ?>" alt="product desc">
                                                    </a>
                                                    <a href="#">
                                                        <img src="../seller/assets/images/products/<?php echo $img2 ?>" alt="product desc">
                                                    </a>

                                                    <a href="#">
                                                        <img src="../seller/assets/images/products/<?php echo $img3 ?>" alt="">
                                                    </a>
                                                </div> --><!-- End .product-nav -->
                                           <!--  </div> --><!-- End .product-body -->
                         <!-- </div>
                     </div>
                    
                        </div> -->
                        <?php 
                               
                                }
                                }
                                
                              ?>
                          </table>
                              <!-- </div> </center>
            </div> 
        </div> -->
        <?php
    } }else{
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }
    ?>
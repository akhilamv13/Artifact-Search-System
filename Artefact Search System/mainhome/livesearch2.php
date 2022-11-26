<?php
require("db.class.php");
$ob=new db_operations();
if(isset($_POST['input'])){
	$input=$_POST['input'];
	$query1="select * from category";
	$result=mysqli_query($conn,$query1);
	
	?>
	<table class="table table-bardered table-striped mt-2" style="width:1000px; margin-left: 20%;margin-right: 20%;">
			<thead>
				<!-- <tr>
					<th>ID</th>
					<th>product</th>
					<th>prodtitle</th>
				</tr> -->
			</thead>
			<tbody>
				<?php
					while($row=mysqli_fetch_assoc($result)){
		//$id=$row['catid'];
					$cat="";
					$catname=$row['catname'];
					
					//$img=$row['img'];

					$conn1=mysqli_connect("localhost","root","","$catname");
					
					$query2="select * from productdet where status=1 and (prodtype like '{$input}%' or prodtitle like '{$input}%' or proddesc like '{$input}%' or prodkeyword like '{$input}%')";
					//echo $query2;
					$result1=mysqli_query($conn1,$query2);
					if(mysqli_num_rows($result1)>0){
						
						while($rows=mysqli_fetch_assoc($result1))
						{
							$cat=$catname;
							//$_SESSION['catname']=$cat;
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
							<tr>
						<td style="width: 200px;"><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;"><img src="../seller/assets/images/products/<?php echo $img1; ?>" style="width: 100px;" alt="Product image" class="product-image"></center></td>
						
						<td style="width: 200px;"><center style="font-size: 1.1em;color: #282828;text-align: left;margin-left: 3%;">Product title : <?php echo $prodtitle; ?><br>Brand : <?php echo $brand; ?><br><form method="post" action="../mainhome/viewsearchprod.php?pid=<?php echo $pid ?>&cat=<?php echo $cat ?>"><center style="font-size: 1.1em;color: #282828;"><button class="btn btn-outline-primary-2">View More</button></center></form></center></td>
						</tr>
						<?php
						}
					}


				}
				?>
			</tbody>
		</table>
		<?php
	}else{
		echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
	}
$conn1->close();
?>
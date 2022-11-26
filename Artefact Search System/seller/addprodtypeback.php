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
    $sellerid=$_SESSION['sellerid'];
    $catname=$_POST['catname'];
    $producttype=$_POST['prodtype'];
    $prodimg=$_POST['prodimg'];
    $flag=0;
    $conn2=mysqli_connect("localhost","root","","$catname");
    $sel="select * from product";
    $result=mysqli_query($conn2,$sel);
    while($rows=mysqli_fetch_array($result))
    {
        $prodtype=$rows['1'];
        if($prodtype==$producttype)
        {
            ?>
            <script>
                alert("Product Type already exist..");
            </script>
            <?php
            header("location:../seller/addprodut.php");
            $flag=1;
            break;
        }
    }
    if($flag==0)
    {
    $insertl= "insert into producttypepending(sellerid,catname,prodtype,prodimg)values('$sellerid','$catname','$producttype','$prodimg')";
    $resl=$ob->db_write($insertl);
    ?>
    <script>
        alert("Product Type has been send for verification..");
    </script>
    <?php
     mail("artefactsearchsystem@gmail.com","product type addedd","seller has added product type please verify it..");
     header("location:../seller/sellerindex.php");
    }
    ?>
    </body>
    </html>
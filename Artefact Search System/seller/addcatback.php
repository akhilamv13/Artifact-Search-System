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
    $category=$_POST['category'];
    $catimg=$_POST['catimg'];
    $prodtype=$_POST['prodtype'];
    $prodimg=$_POST['prodimg'];
    $flag=0;
    $sel="select * from category";
    $result=$ob->db_read($sel);
    while($rows=mysqli_fetch_array($result))
    {
        $catname=$rows['1'];
        if($catname==$category)
        {
            ?>
            <script>
                alert("category already exist..");
                header("location:../seller/addprodut.php");
            </script>
            <?php
            $flag=1;
            break;
        }
    }
    if($flag==0)
    {
    $insertl= "insert into categorypending(sellerid,catname,catimg,prodtype,prodimg)values('$sellerid','$category','$catimg','$prodtype','$prodimg')";
    $resl=$ob->db_write($insertl);
    ?>
    <script>
        alert("Category name has been send for verification..");
    </script>
    <?php
     mail("artefactsearchsystem@gmail.com","category addedd","seller has added category please verify it..");
     header("location:../seller/sellerindex.php");
    }
    ?>
    </body>
    </html>
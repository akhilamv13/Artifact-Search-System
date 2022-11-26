<?php

include('db.class.php');

$catname = isset($_POST['catname']) ? $_POST['catname'] : 0;
// $stateId = isset($_POST['stateId']) ? $_POST['stateId'] : 0;
$command = isset($_POST['get']) ? $_POST['get'] : "";

switch ($command) {
    case "catname":
        $statement = "SELECT catname FROM category";
        $dt = mysqli_query($conn, $statement);
        while ($result = mysqli_fetch_array($dt)) {
            echo $result1 = "<option value=" . $result['catname'] . ">" . $result['catname'] . "</option>";
        }
        break;

    // case "state":
    //     $result1 = "<option>Select State</option>";
    //     $statement = "SELECT id,name FROM states WHERE country_id=" . $countryId;
    //     $dt = mysqli_query($conn, $statement);

    //     while ($result = mysqli_fetch_array($dt)) {
    //         $result1 .= "<option value=" . $result['id'] . ">" . $result['name'] . "</option>";
    //     }
    //     echo $result1;
    //     break;

    case "prodtype":
        $result1 = "<option>Select Product</option>";
        $conn2=mysqli_connect("localhost","root","",$catname);
        $statement = "SELECT prodtype FROM product";
        $dt = mysqli_query($conn2, $statement);

        while ($result = mysqli_fetch_array($dt)) {
            $result1 .= "<option value=" . $result['prodtype'] . ">" . $result['prodtype'] . "</option>";
        }
        echo $result1;
        break;
}

exit();
?>
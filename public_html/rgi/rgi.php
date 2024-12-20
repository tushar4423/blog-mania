<?php
include "db.php";

if ($_POST["add"] == "insert") {
    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $countrycode = $_POST["countrycode"];
    $phone = $_POST["phone"];
    $skype = $_POST["skype"];
    $password = $_POST["password"];

if (isset($_POST["first"]) && !empty($_POST["first"])) {
    $insert = "INSERT INTO user(first_name,last_name,email,country,code,phone,skype,password) VALUES ('$first','$last','$email','$country','$countrycode','$phone','$skype','$password')";
    $sql = mysqli_query($conn, $insert);
    if ($sql) {
        $last_id = mysqli_insert_id($conn);
        echo $last_id;
    } else {
        echo "0";
    }
}
} else if ($_POST["update"] == "update") {
    $id = $_REQUEST["id"];
    //print_r($_POST);die;
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $update = "UPDATE rgi SET email='$email', gender='$gender' 	WHERE id='$id';";
        $sql1 = mysqli_query($conn, $update);
        if ($sql1) {
            echo $id;
            //echo "update sucess";
        } else {
            echo "error" . mysqli_error($conn);
        }
    }
}else if($_POST['submit']=='submit'){
	$submit_id = $_REQUEST["submit_id"];
    //print_r($_POST);die;
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["username"]) && !empty($_POST["username"])) {
       $update2 = "UPDATE rgi SET username='$username', password='$password' WHERE id='$submit_id';";
        $sql2 = mysqli_query($conn, $update2);
        if ($sql2) {
            echo 'Form Submit successfully';
        } else {
            echo "Form Submit error" . mysqli_error($conn);
            //echo 'insert error'.mysqli_error($conn);
        }
    }
} else {
    echo "error" . mysqli_error($conn);
}

?>

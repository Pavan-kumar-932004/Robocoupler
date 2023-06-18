<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database = "master";
$con = @mysqli_connect($server_name, $username, $password, $database);

if (isset($_POST['employeenumber'])) {
    $emp_number = $_POST['employeenumber'];

    $query = "SELECT img FROM name_master WHERE ename = '$emp_number'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    $base64Image = base64_encode($row['img']);

    // Return the base64-encoded image data
    echo json_encode(['img' => $base64Image]);
}
?>

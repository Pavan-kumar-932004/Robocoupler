<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database = "master";
$con = @mysqli_connect($server_name, $username, $password, $database);

if (isset($_POST['employeenumber'])) {
    $emp_number = $_POST['employeenumber'];

    $query = "SELECT insname, pname, ename, title, rwname, sex, dob, sob, scode, qcode, dcode, nwork, nwork2, nwork3, tno, mno, crw, aadhar, tid, idno, mcode, ocode, doe, city, spl FROM name_master WHERE ename = '$emp_number'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    // Return the data as JSON response
    header('Content-Type: application/json');
    echo json_encode($row);
}
?>

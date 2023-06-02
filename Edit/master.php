<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="interface_style.css">
    </head>
    <body>
     
<form method="post">
    <center><h1>NAME MASTER</h1></center>
        <div class="container">
            <div class="child1">
                <table id="table1" cellpadding="5px">
                     <tr>
                        <td>Institute Name:</td>
                        <td><input type="text" name="insname" required oninput="updateSecondField(this.value)"></td>
                    </tr>
                    <tr>
                        <td>Person Name:</td>
                        <td><input type="text" name="pname" required></td>
                    </tr>
                    <tr>
                        <td>Employee Number:</td>
                        <td><input type="number" name="ename" required></td>
                    </tr>
                    <tr>
                        <td>Title:</td>
                        <td><select autofocus name="title" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>RW Name:<br>(Surname followed by first name/<br>followed by father/husband name)</td>
                        <td><input type="text" name="rwname" required></td>
                    </tr>
                    <tr>
                        <td>Sex:</td>
                        <td><select autofocus name="sex" required>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><input type="date" name="dob" required></td>
                    </tr>
                    <tr>
                        <td>State of Birth:</td>
                        <td><input type="text" name="sob" required></td>
                    </tr>
                    <tr>
                        <td>StateCode:</td>
                        <td><select autofocus name="scode" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>QualifyCode:</td>
                        <td><select autofocus name="qcode" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select></td>
                    </tr>
                </table>
            </div>
            <div class="child1">
            <table id="table2" cellpadding="5px">
                <tr>
                    <td>Designation Code:</td>
                    <td><select name="dcode" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Nature Of Work:</td>
                    <td><select name="nwork" required>
                        <option>1</option>
                        <option>2</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Nature Of Work 2,3:</td>
                    <td>
                        <select name="nwork2" required>
                            <option>1</option>
                            <option>1</option>
                        </select>
                        <select name="nwork3" required>
                            <option>1</option>
                            <option>1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status Code:</td>
                    <td>
                        <select name="scode" required>
                            <option>1</option>
                            <option>1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Telephone Number:</td>
                    <td><input type="number" name="tno" required></td>
                </tr>
                <tr>
                    <td>Mobile number:</td>
                    <td><input type="number" name="mno" required></td>
                </tr>
                <tr>
                    <td>Category Of RW:</td>
                    <td>
                        <select name="crw" required>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Aadhar Number:</td>
                    <td><input type="number" name="aadhar" required></td>
                </tr>
            </table>
            </div>
            <div class="child1">
                <table id="table2" cellpadding="5px">
                    <th>Candidate Image:</th>
                    <th>Biometric</th>
                <tr colspan="2">
                    <td><img src="https://th.bing.com/th?id=OIP.SgNIqg4rP-z2hPnEhUe8kgHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" alt="image1" height="100px" width="100px"><br><button type="submit" id="capture" name="capture">CAPTURE</button></td>
                    <td><img src="https://th.bing.com/th?id=OIP.xhI3vErTo4amH0KW569JVQHaHa&w=250&h=250&c=8&rs=1&qlt=30&o=6&dpr=1.3&pid=3.1&rm=2" alt="image1" height="100px" width="100px"><br><button type="submit" id="Scan" name="scan">SCAN</button></td>
                </tr>
                <tr>
                    <td>Type of ID:</td>
                    <td><select name="tid" required>
                        <option>1</option>
                        <option>2</option>
                    </select></td>
                </tr>
                <tr>
                    <td>ID Number:</td>
                    <td><input type="text" name="idno" required></td>
                </tr>
                <tr>
                    <td>Monocenter Code:</td>
                    <td><input type="number" name="mcode" required></td>
                </tr>
                <tr>
                    <td>Operation Code:</td>
                    <td><input type="number" name="ocode" required></td>
                </tr>
                <tr>
                    <td>Date Of Entry</td>
                    <td><input type="date" name="doe" required></td>
                </tr>
                </table>
            </div>
        </div>
        <div class="container2">
            <center>
                <table id="bottom" cellpadding="5px" cellspacing="20px">
              <tr colspan="2">
                <td>Institute Name:&emsp;<input type="text" name="isname" id="isname" readonly></td>
                <td>City:<input type="text" name="city" required></td>
              </tr>
              <tr>
                <td>Msg/Error:&emsp;&emsp;&nbsp;&nbsp;<input type="text" name="msg" value="Submit to verify" id="msg" readonly style="background-color:#FFFHEO;"></td>
              </tr>
              <tr>
                <td>Spl Information:&nbsp;&nbsp;<input type="text" name="spl" required></td>
              </tr>
                </table>
            </center>
        </div>
        <div class="buttons">
            <center><button type="submit">|<<</button>
            <button type="submit"><</button>
            <button type="submit">></button>
            <button type="submit">>>|</button>
            <button type="submit">view</button>
            <button type="submit">Search</button>
            <button type="submit">Delete</button>
            <button type="submit">new</button>
            <button type="submit">Save</button>
            <button type="reset">Reset</button>
            <button type="submit">Close</button></center>
        </div>
        <div class="scrolling-text">
            <marquee behavior="scroll" direction="left">Welcome to Robocoupler - Innovating the future with robotics technology!</marquee>
          </div>
</form>
<script>
    function updateSecondField(value) {
      document.getElementById("isname").value = value;
    }
</script> 
<?php
if(isset($_POST["insname"])&&isset($_POST["pname"])&&isset($_POST["ename"])&&isset($_POST["title"])&&isset($_POST["rwname"])&&isset($_POST["sex"])
&&isset($_POST["dob"])&&isset($_POST["sob"])&&isset($_POST["scode"])&&isset($_POST["qcode"])&&isset($_POST["nwork"])&&isset($_POST["nwork2"])
&&isset($_POST["nwork3"])&&isset($_POST["tno"])&&isset($_POST["mno"])&&isset($_POST["crw"])&&isset($_POST["aadhar"])&&isset($_POST["tid"])
&&isset($_POST["mcode"])&&isset($_POST["ocode"])&&isset($_POST["doe"])&&isset($_POST["city"])&&isset($_POST["spl"])&&isset($_POST["idno"])
&&isset($_POST["dcode"]))
{
	include 'phpdump.php';
	$insname=$_POST["insname"];
	$pname=$_POST["pname"];
    $ename=$_POST["ename"];
    $title=$_POST["title"];
    $rwname=$_POST["rwname"];
    $sex=$_POST["sex"];
    $dob=$_POST["dob"];
    $sob=$_POST["sob"];
    $scode=$_POST["scode"];
    $qcode=$_POST["qcode"];
    $dcode=$_POST["dcode"];
    $nwork=$_POST["nwork"];
    $nwork2=$_POST["nwork2"];
    $nwork3=$_POST["nwork3"];
    $tno=$_POST["tno"];
    $mno=$_POST["mno"];
    $crw=$_POST["crw"];
    $aadhar=$_POST["aadhar"];
    $tid=$_POST["tid"];
    $idno=$_POST["idno"];
    $mcode=$_POST["mcode"];
    $ocode=$_POST["ocode"];
    $doe=$_POST["doe"];
    $city=$_POST["city"];
    $spl=$_POST["spl"];
    /*$timestamp = date("Y-m-d H:i:s");*/
    

	$con=@mysqli_connect($server_name,$username,$password,$database);
	
	@$query="INSERT INTO name_master VALUES('$insname','$pname','$ename','$title','$rwname','$sex','$dob','$sob','$scode','$qcode','$dcode','$nwork','$nwork2',
    '$nwork3','$tno','$mno','$crw','$aadhar','$tid','$idno','$mcode','$ocode','$doe','$city','$spl',CURRENT_TIME())";
	
	if(mysqli_query($con,$query)){
		echo '<script type="text/javascript">';
		echo 'var inputField = document.getElementById("msg");';
		echo 'inputField.value = "Updation Succesful";';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">';
		echo 'var inputField = document.getElementById("msg");';
		echo 'inputField.value = "Not updated";';
		echo '</script>';
	}
	mysqli_close($con);
}
?>
    </body>
</html>
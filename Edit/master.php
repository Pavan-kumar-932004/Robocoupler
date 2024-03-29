<!DOCTYPE html>
<html lang="en">
<html>
    <head>


    <style>
       #video {
        object-fit: cover;
        width: 85px;
        height: 100px;
      }
      #canvas {
        object-fit: cover;
        width: 85px;
        height: 100px;
        display: none;
      }
      #real{
        object-fit: cover;
        width: 85px;
        height: 100px;

      }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="interface_style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
$(document).ready(function() {
  var cameraFeedActive = false; // Flag to track if the camera feed is active

  $('#edit').click(function() {
    var employeeNumber = $('input[name="ename"]').val();
    console.log('Employee Number:', employeeNumber);

    // First AJAX request to retrieve all columns except time and img
    $.ajax({
      url: 'retrieve_data.php',
      type: 'POST',
      data: { employeenumber: employeeNumber },
      success: function(response) {
        console.log('Response:', response);
        // Update the fields with the retrieved data
        for (var key in response) {
          if (response.hasOwnProperty(key)) {
            var value = response[key];
            $('input[name="' + key + '"]').val(value);
          }
        }

        $('#isname').attr('value',response.insname);
      },
      error: function() {
        // Handle error if any
        $('#msg').val('Error occurred while retrieving data.');
      }
    });

    // Second AJAX request to retrieve the img field separately
    $.ajax({
      url: 'retrieve_img.php',
      type: 'POST',
      data: { employeenumber: employeeNumber },
      success: function(respons) {
        const video = document.getElementById('video');
        //console.log('Image Response:', response);
        video.pause();
        video.srcObject = null; 
        $('#video').attr('src', ''); // Clear the video source
        pars=JSON.parse(respons)
        console.log(pars)
        var imgSrc = 'data:image/jpeg;base64,' + pars.img;
        var $img = $('<img>')
        .attr('src', imgSrc)
        .attr('id', 'real')
        .css({
            'object-fit': 'cover',
            'width': '85px',
            'height': '100px'
            });
        $('#video').replaceWith($img);

        // Disable the capture button
        $('#capture-btn').prop('disabled', true);
      },
      error: function() {
        // Handle error if any
        console.log('Error occurred while retrieving image.');
      }
    });
  });
});
</script>


    </head>
    <body>
    <div w3-include-html="../sidebar/test.html"></div>
    <center><h1>NAME MASTER</h1></center>
    <div class="heading">
            <center>
            <a href="../Main_page/Main_page_code.html"><img src="../images/logo.png" width="70"></a>
            <a href="../Main_page/Main_page_code.html"><img src="../images/img.jpg" width="290"></a>
            <img src="../images/msme.jpg" width="100">
            
            
        </center><br>
        <nav class="w3-bar w3-black">
            <center>
                <div class="dropdown">
                    <a href="#home" class="w3-button w3-bar-item">EDIT</a>
                    <div class="dropdown-content">
                        <a href="../Edit/master.php">Name Master</a><br>
                        <a href="../Edit/institution_master.html">Institution Master</a><br>
                        <a href="../Edit/institution_links.html">Institution Links</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#band" class="w3-button w3-bar-item">VIEW</a>
                    <div class="dropdown-content">
                        <a href="../View/yearly_dose.html">Yearly Dose Data</a><br>
                        <a href="../View/lifetime dose data.html">LifeTime Dose Data </a><br>
                        <a href="../View/institution dose data stat.html">Institution Dose Data Statistics</a><br>
                        <a href="../View/operation info data.html">Operator Information View</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#tour" class="w3-button w3-bar-item">SEARCH</a>
                    <div class="dropdown-content">
                        <a href="../Search/ims.html">Institution Master Search</a><br>
                        <a href="../Search/nms.html">Name Master Search</a><br>

                    </div>
                    </div>
                    <div class="dropdown">
                        <a href="#contact" class="w3-button w3-bar-item">OPERATOR INFO</a>
                        <div class="dropdown-content">
                            <a href="../Operator_info/operator_creationn.html">Operator Creation</a><br>
                            <a href="../Operator_info/cp1.html">Change Password</a><br>
                            <a href="../Operator_info/ovu.html">Operator Validity Updation</a><br>
                            <a href="../Operator_info/task_allocation.html">Operator Task Allotment</a><br>
                            <a href="../Operator_info/reset.html">Reset Password</a><br>
    
                        </div>
                        </div>
                        <div class="dropdown">
                            <a href="#tour" class="w3-button w3-bar-item">PROCESS</a>
                            <div class="dropdown-content">
                                <a href="../Process/Input File Handling.html">Input File Handling</a><br>
                                <a href="../Process/Radiation_worker_info.html">Radiation Worker Info</a><br>
                                <a href="../Process/Dose data Updation.html">Dosedata Updation</a><br>
                                <a href="../Process/Dose_data_.rollback.html">Dosedata Rollback</a><br>
                                <a href="../Process/Dose_Data_Correction.html">Dosedata Correction</a><br>
        
        
                            </div>
                            </div>
                            <div class="dropdown">
                                
                                
                                <a href="#tour" class="w3-button w3-bar-item">REPORTS</a>
                                <div class="dropdown-content">
                                    <a href="../Reports/Monthly_Dose_Report.html">Monthly Dose Report</a><br>
                                    <a href="../Reports/Annual_Dose_Report.html">Annual Dose Report</a><br>
                                    <a href="../Reports/5yr block cummilative.html">Annual BlockWise Report</a><br>
                                    <a href="../Reports/institution adrdess report.html">Institute Address Report</a><br>
                                    <a href="../Reports/Dose_Records_Report.html">Dose Records Report</a><br>
                                    <a href="../Reports/institution status report.html">Institution Status List Report</a><br>
                                    <a href="../Reports/Radiation_analysis_1.html">Radiation Analysis 1</a><br>
                                    <a href="../Reports/Dose analysis report.html">Dose Analysis Report</a><br>
                                    <a href="../Reports/Radiation Analasis -2.html">Radiation Analysis 2</a><br>
                                    <a href="../Reports/GraphicalAnalysis1.html">Graphical Analysis 1</a><br>
                                    <a href="../Reports/Graphical_Analysis_2.html">Graphical Analysis 2</a><br>
                                    <a href="../Reports/institution master report.html">Institution Master Report</a><br>
                                    <a href="../Reports/month wise report.html">Month Wise Report Limited columns</a><br>
                                    <a href="../Reports/Name master report.html">Names Master Report</a><br>
                                    <a href="../Reports/Photo___Fingerprint _status.html">Photo & Fingerprint Status Report</a><br>
                                    
            
                                </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#tour" class="w3-button w3-bar-item">BIO REPORTS</a>
                                    <div class="dropdown-content">
                                        <a href="../bioreports/Fingerprint_Report.html">Fingerprint Reports</a><br>
                                        <a href="../bioreports/Photo_Reports.html">Photo Reports</a><br>
                
                                    </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#tour" class="w3-button w3-bar-item">HELP</a>
                                        <div class="dropdown-content">
                                            <a href="#about">Photo & FP Display</a><br>
                                            <a href="#services">Checklist Generation</a><br>
                                            <a href="#services">Printer Installation</a><br>
                                            <a href="#services">Input Data Format</a><br>
                                            <a href="#services">FAQ(frequently asked questions)</a><br>
                                            <a href="#services">SOP Database</a><br>

                    
                                        </div>
                                        </div>

            </center>
            </nav>
            
            </div>
     
    <form method="post" enctype="multipart/form-data">
    
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
                    <td><video id="video" autoplay></video><canvas id="canvas"></canvas>
                    <br><button type="button" id="capture-btn" onclick="captureImage()">CAPTURE</button></td>
                    <input type="hidden" id="imageDataInput" name="img" value="">
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
            <center>
            <div class="butt">
            <button class="button ok" type="submit" id="ok" style="background-color: #c5c221;">SAVE</button>
            <button class="button delete" type="reset" id="delete" onclick=document.location.reload() style="background-color: #df8b1c;" >RESET</button>
            <button class="button close" type="button"  name="edit_button" id="edit" style="background-color: #4CAF50;">VIEW</button>
            </div>
             </center>
             <br>
             <br>

        <div class="scrolling-text">
            <marquee behavior="scroll" direction="left">Welcome to Robocoupler - Innovating the future with robotics technology!</marquee>
          </div>
</form>
<script type="text/javascript">
    function updateSecondField(value) {
      document.getElementById("isname").value = value;
    }
    const video = document.getElementById('video');
  const canvas = document.getElementById('canvas');
  const ctx = canvas.getContext('2d');
  const captureBtn = document.getElementById('capture-btn');
  let isCaptured = false;

  function run() {
    navigator.mediaDevices.getUserMedia({ video: true })
      .then((stream) => {
        video.srcObject = stream;
      })
      .catch((error) => {
        console.error('Error accessing webcam:', error);
      });

    video.addEventListener('play', () => {
      setInterval(() => {
        if (!isCaptured) {
          ctx.clearRect(0, 0, canvas.width, canvas.height);
          ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
        }
      }, 100);
    });
  }

  function captureImage() {
    if (!isCaptured) {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
      isCaptured = true;
      captureBtn.textContent = 'Retake';
      video.pause();
      const imageData = canvas.toDataURL('image/jpeg');
      document.getElementById('imageDataInput').value = imageData;
    } 
    else {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    isCaptured = false;
    captureBtn.textContent = 'Capture';
    video.play();
        }
  }

  run();
</script>

<?php
if (isset($_POST["insname"]) && isset($_POST["pname"]) && isset($_POST["ename"]) && isset($_POST["title"]) && isset($_POST["rwname"]) && isset($_POST["sex"])
&& isset($_POST["dob"]) && isset($_POST["sob"]) && isset($_POST["scode"]) && isset($_POST["qcode"]) && isset($_POST["dcode"]) && isset($_POST["nwork"]) && isset($_POST["nwork2"])
&& isset($_POST["nwork3"]) && isset($_POST["tno"]) && isset($_POST["mno"]) && isset($_POST["crw"]) && isset($_POST["aadhar"]) && isset($_POST["tid"])
&& isset($_POST["mcode"]) && isset($_POST["ocode"]) && isset($_POST["doe"]) && isset($_POST["city"]) && isset($_POST["spl"]) && isset($_POST["idno"]) && isset($_POST["img"])) {

include 'phpdump.php';

// Get the form data
$insname = $_POST["insname"];
$pname = $_POST["pname"];
$ename = $_POST["ename"];
$title = $_POST["title"];
$rwname = $_POST["rwname"];
$sex = $_POST["sex"];
$dob = $_POST["dob"];
$sob = $_POST["sob"];
$scode = $_POST["scode"];
$qcode = $_POST["qcode"];
$dcode = $_POST["dcode"];
$nwork = $_POST["nwork"];
$nwork2 = $_POST["nwork2"];
$nwork3 = $_POST["nwork3"];
$tno = $_POST["tno"];
$mno = $_POST["mno"];
$crw = $_POST["crw"];
$aadhar = $_POST["aadhar"];
$tid = $_POST["tid"];
$idno = $_POST["idno"];
$mcode = $_POST["mcode"];
$ocode = $_POST["ocode"];
$doe = $_POST["doe"];
$city = $_POST["city"];
$spl = $_POST["spl"];
$imageData = $_POST["img"];
$imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
$imageData = str_replace(' ', '+', $imageData);
$imageData = base64_decode($imageData);

$con = mysqli_connect($server_name, $username, $password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert into the database
$query = "INSERT INTO name_master (insname, pname, ename, title, rwname, sex, dob, sob, scode, qcode, dcode, nwork, nwork2, nwork3, tno, mno, crw, aadhar, tid, idno, mcode, ocode, doe, city, spl, img) 
    VALUES ('$insname', '$pname', '$ename', '$title', '$rwname', '$sex', '$dob', '$sob', '$scode', '$qcode', '$dcode', '$nwork', '$nwork2', '$nwork3', '$tno', '$mno', '$crw', '$aadhar', '$tid', '$idno', '$mcode', '$ocode', '$doe', '$city', '$spl', ?)";

$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "s", $imageData);
mysqli_stmt_send_long_data($stmt, 0, $imageData);

if (mysqli_stmt_execute($stmt)) {
    echo '<script type="text/javascript">';
    echo 'var inputField = document.getElementById("msg");';
    echo 'inputField.value = "Updation Successful";';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo 'var inputField = document.getElementById("msg");';
    echo 'inputField.value = "Not updated";';
    echo '</script>';
}

mysqli_stmt_close($stmt);
mysqli_close($con);
}

?>
</body>
</html>


    </body>
</html>
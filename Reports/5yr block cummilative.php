<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="../sidebar/styles.css"><?php
// Get the current page's URL
$pageURL = $_SERVER['REQUEST_URI'];

// Define the path to the JSON file
$jsonFilePath = '../visits/count.json';

// Read the JSON file contents
$jsonData = file_get_contents($jsonFilePath);

// Convert the JSON data to an associative array
$visitsData = json_decode($jsonData, true);

// Check if the page URL already exists in the data
if (!isset($visitsData[$pageURL])) {
  // Set the visit count to 1 for a new page
  $visitsData[$pageURL] = 1;
} else {
  // Increment the visit count for an existing page
  $visitsData[$pageURL]++;
}

// Convert the updated data back to JSON
$updatedJsonData = json_encode($visitsData);

// Write the updated JSON data back to the file
file_put_contents($jsonFilePath, $updatedJsonData);
?>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MB_form_3</title>
    <style>    
        *{font-family: Calibri, Arial, sans-serif;}
        html{background-color: #97DEF9;}
        h4{text-align: end;color: darkgreen;}
        h1{
        font-style:initial;
        color: #0C134F;
        text-align: center;
    }
        div.final{
    background: #6C9BCF;
    border: solid 1px black;
    border-radius: 3px;
    padding: 10px;
    width:600px;
    
    
  }
  input{
      width: 200px;
      padding: 1px;
      border-radius: 4px;
      background-color:#FFF4E0;
      text-emphasis-color: black;
    }

  .scrolling-text {
  padding: 5px;
  background-color: #006CDF;
  color: #fff;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  width: auto;
}

.scrolling-text marquee {
  font-weight: bold;
  width: 100%;
}


        .tab{margin-left: auto;margin-right: auto;}
        input[type=dc]{width: 125%;border: inset;background-color: #6C9BCF}
        input[type=nwc]{width: 125%;border: inset;background-color: #6C9BCF}
        input[type=mc]{width: 125%;border: inset;background-color: #6C9BCF}
        input[type=oc]{width:125%;border: inset;background-color: #6C9BCF}
        input[type=msgs]{width: 200% ;border: inset;background-color: lightgray}
        .radio{margin-left: auto;text-align: center;padding-top: 10px;margin-right: auto;}
        .button {
      display: inline-block;
      padding: 10px 20px;
      margin: 5px;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .ok {
      background-color: #4CAF50; /* Green */
    }
    
    .delete {
      background-color: #f44336; /* Red */
    }
    
    .view {
      background-color: #2196F3; 
    }
    
    .close {
      background-color: #2196F3; 
    }
    .button:hover {
      opacity: 0.8;
      background-color: #333333;
    }
    *{
          padding:0;
          font-family: Calibri, Arial, sans-serif;
          
          }
  .heading{
    background-color: white;
        width: 100vw;
        height: 150px;
        margin-left: calc(50% - 50vw); 
        margin-right: calc(50% - 50vw);
        margin: 0;
        position: fixed;
        top: 0;
        left: 0;
        
            }
            .heading h1{
                
                flex-grow: 1;
            }
            .img{
                vertical-align: middle;
                margin-left:auto;
                margin-right:auto;
                
            }
            a:link {
             color: rgb(1, 9, 100);
             background-color: transparent;
             text-decoration: none;
             margin-right:50px;
             
             font-weight:bold;
             border-radius: 5px;
            }
            a:hover {
            color: rgb(80, 115, 242);
            background-color: transparent;
            text-decoration: underline;
            }
            a:active {
            color: rgb(32, 2, 110);
            background-color: transparent;
            text-decoration: underline;
            }
    h1{
    color: #0C134F;
    font-size:xx-large;
    text-align: center;
    margin-top:190px;
}
body{
    background-color: #97DEF9;
    font-size:20px;
    
}

input{
  width: 200px;
  padding: 1px;
  border-radius: 4px;
  background-color:#FFF4E0;
  text-emphasis-color: black;
}
.button {
  display: inline-block;
  padding: 10px 20px;
  margin: 5px;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

       
 .centrebox{

border-style:groove;
padding: 10px;
background: #6C9BCF;
border: solid 1px black;
border-radius: 3px;
width:650px;

}
.scrolling-text marquee {
font-weight: bold;
width: 100%;
}
.scrolling-text {
padding: 5px;
background-color: #006CDF;
color: #fff;
position: fixed;
bottom: 0;
left: 0;
right: 0;
width:auto;
}
.dropdown {
            position: relative;
            display: inline-block;
        }

.dropdown-content {
            padding:8px 16px;
            margin-bottom: 50px;
            display: none;
            position: absolute;
            background-color:rgba(255, 255, 255,0.8);
            min-width: 190px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            text-align: left;
            font-size:14px; 
            border-radius: 15px;
            align-items: center;
            justify-content: space-between;
            margin:2px 0;
        }
        .dropdown:hover .dropdown-content {display:block;}
.dropdown:hover .dropdown-content {display: block;}

    </style>
</head>
<body>
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
    <h1>BLOCK CUMULATIVE DOSE REPORT</h1>
    <center>
    <div class="final">
        <form>
        <table class="tab">
          <tr>
            <td>Year:</td>
            <td><input type="date" >
        </tr>
                <tr>
                    <td>Type of records:</td>
                    <td><select><option>Number1</option><option>number 2</option></select></td>
                </tr>
                
                    <td>Analytical reports:</td>
                    <td><input type="date" id="dob" name="dob"> To: <td><label for="dob"></label>
                        <input type="date" id="dob" name="dob"></td></td>
                </tr>
               
                <tr>
                    <td>Institute No:</td>
                    <td><input type="date" id="dob" name="dob"><div style="margin-left: 210px;margin-top: -20px;">To:</div> <td><label for="dob"></label>
                        <input type="date" id="dob" name="dob"></td></td>
                </tr>
                
                <tr>
                  <td>Employee No:</td>
                  <td><input type="date" id="dob" name="dob"> To: <td><label for="dob"></label>
                      <input type="date" id="dob" name="dob"></td></td>
              </tr>
                <tr>
                  <td>Dose Type:</td>
                  <td><select><option>Number1</option><option>number 2</option></select></td>
              </tr>
              
                <tr>
                  <td>Active in highest year:</td>
                  <td><div style="margin-left: -100px;"><input type="checkbox"></div></td>
                 </tr>
                <tr>
                    <td>Recieved dose:</td>
                    <td><input type="text" >
                </tr>
               
                    <td>Message/Error</td>
                    <td><input type="text" value=""/></td>
                </tr>
                </table>
            </center>
                <div class="radio">
                    
                    <button  class="button ok" >GENERATE</button>
                    <button class="button delete" type="reset">RESET</button>
                    <a href="../Main_page/Main_page_code.html"><button class="button close" type="button">CLOSE</button></a>
                </div>
            </form><br><br>
                <div class="scrolling-text">
                    <marquee behavior="scroll" direction="left">Welcome to Robocoupler - Innovating the future with robotics technology!</marquee>
                  </div>
        </div>

        
</body>
</html>
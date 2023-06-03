<?php
session_start();
if(isset($_SESSION["auth"]))
{
  $_SESSION['status'] = "you are already logged in";
  header('../Main_page/Main_page_code.html');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> RoboCouper | WebPage</title> 
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="logos/logo.png">
    </head>
    <body>
      <div class="sticked">
        <div class="strip">
          <img src="logos/phone.png" alt="Phone Icon" class="phone-icon">
          <span id="phone-number">+91-99908 60298</span>
          
      
        </div>
      
            <div class="strip2">
              <div class="banner">
                <div class="logo-container">
                  <img src="logos/robocouplerlogo-removebg-preview.png" width="90px" height="90px" style="margin-right: 520px;">
                </div>
                <div class="logo-container">
                  <img src="logos/rcbanner-removebg-preview.png" style="margin-right: 390px;padding-right: 130px;">
                </div>
                <div class="logo-container">
                  <img src="logos/123-removebg-preview.png" width="90px" height="80px" style="margin-right: 20px;">
                </div>
              </div>
          <div class="nav-is-coming">
        
        <br>
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
            
              
          </div>
          
           
           
          </div>

         
        
        <div class="second-part">
          <div class="video-background">
            <video autoplay loop muted>
              <source src="abstract blue background.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
          <div class="container">
            <form method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
              </div>
              <div class="checkbox-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember" style="font-size: 20px;">Remember Me</label>
              </div>
              <button class="button ok" type="submit" name="submit" style="background-color: #007bff;" >Submit</button>
           
            </form>
            <div class="forgot-password" style="font-size: 20px;">
            </div>
            <a href="#" style="color: #4a88cb;">Forgot Password?</a>
          </div>
            <div class="slides-section">
              <div class="fruit-slider">
                <div class="slides">
                  <div class="slide">
                    <img src="1.jpg" alt="Apple" style="border-radius: 10px;">
                  </div>
                  <div class="slide">
                    <img src="3.jpg" alt="Banana"style="border-radius: 10px;">
                  </div>
                  <div class="slide">
                    <img src="2.jpg" alt="Orange"style="border-radius: 10px;">
                  </div>
                </div>
              
                <button class="prev-btn" onclick="changeSlide(-1)">&#10094;</button>
                <button class="next-btn" onclick="changeSlide(1)">&#10095;</button>
              </div>
              
            
          
            </div>
              
          </div>
              
            </div>
            </div>
            <div class="full-3">
              <div class="third-part">
                <img class="third-img" src="2.jpg">
                <div class="text-container">
                  <h1 class="three-head">Our Approach to Robotics</h1>
                  <p class="three-desc">Our objective is to provide High Technology Training Solutions for Individuals and Corporate, in a cost-effective manner, without compromising on quality. We currently provide training over subjects ranging from Embedded Systems, Artificial Intelligence, Mechatronics, Aero Dynamics. In the near future, our aim is to cover an even wider range of assigned projects.</p>
                </div>
              </div>
            </div>
            
         
         
            <div class="fourth-row">
              <div class="team-section">
                <div class="blue-block">
                  <div class="blue-heads">Meet our Team</div>
                </div>
                <div class="team-members">
                  <div class="team-member">
                    <img src="team1.png" alt="Team Member 1">
                    <div class="member-details">
                      <div class="member-name">Praveen MaIla</div>
                      <div class="member-role">Founder</div>
                    </div>
                  </div>
                  <div class="team-member">
                    <img src="team1.png" alt="Team Member 2">
                    <div class="member-details">
                      <div class="member-name">Person 2</div>
                      <div class="member-role">AI Developer</div>
                    </div>
                  </div>
                  <div class="team-member">
                    <img src="team1.png" alt="Team Member 3">
                    <div class="member-details">
                      <div class="member-name">Person 3</div>
                      <div class="member-role">Project Manager</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        
       
            <footer>
              <div class="contact-section">
                <h2 style="padding-bottom: 7px;margin-right: 280px;">Contact Us</h2>
                <ul class="contact-info">
                  <li><i class="fa fa-phone"></i>+1 123-456-7890</li>
                  <li><i class="fa fa-envelope"></i>info@roboticscompany.com</li>
                  <li><i class="fa fa-map-marker"></i>1234 Robotics Street, City, Country</li>
                </ul>
              </div>
              <div class="social-icons">
                <a href="#"><i><img src="logos/6297a2f1e01809629f113598-removebg-preview.png" class="facebook"></i></a>
                <a href="#"><i><img class="twitter" src="logos/fb-removebg-preview.png"></i></a>
              </div>
              <div class="services-section">
                <h2 style="margin-right: 150px">Services</h2>
                <ul>
                  <li>Robot Design and Development</li>
                  <li>Industrial Automation Solutions</li>
                  <li>Artificial Intelligence Integration</li>
                  <li>Robotics Training and Education</li>
                  <li>Consultancy and Support</li>
                </ul>
              </div>
            </footer>
            
          
          <div class="scrolling-text">
            <marquee behavior="scroll" direction="left">Welcome to Robocoupler - Innovating the future with robotics technology!</marquee>
          </div>
          



















<script>
            let slideIndex = 0;
            const slides = document.querySelectorAll('.slide');
            
            function showSlide() {
              slides.forEach((slide) => {
                slide.style.transform = `translateX(-${slideIndex * 100}%)`;
              });
            }
            
            function changeSlide(n) {
              slideIndex += n;
              if (slideIndex < 0) {
                slideIndex = slides.length - 1;
              } else if (slideIndex >= slides.length) {
                slideIndex = 0;
              }
              showSlide();
            }
            
            setInterval(() => {
              changeSlide(1);
            }, 3000); // Change slide every 3 seconds
            
            showSlide();
          </script>

            <?php
            $server_name="localhost";
            $username="root";
            $password="";
            $database="master";
            $con=@mysqli_connect($server_name,$username,$password,$database);
            if (isset($_POST['username'])&&isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
        
                $sql = "select * from login where username = '$username' and password = '$password'";  
                $result = mysqli_query($con, $sql);   

                if(mysqli_num_rows($result) > 0){  

                  foreach($result as $row){
                    $username=$row['username'];
                    $password=$row['password'];
                  }
                    
                    $_SESSION["auth"] = true;
                    $_SESSION['auth_user']=[
                      'username'=>$username,
                      'password'=>$password
                    ];
                    $_SESSION['status']="logged in successfully";
                    echo  '<script>
                                window.location = "../Main_page/Main_page_code.html";
                           </script>';
                    exit();
                }  
                else{  
                    echo  '<script>
                                window.location.href = "main.php";
                                alert("Login failed. Invalid username or password!!")
                            </script>';
                }     
                mysqli_close($con);
            }
            ?>

            






    </body>
</html>
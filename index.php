<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/main.css">  
    <title>DoctFind</title>

</head>
<body>
<?php

// Initialize successMessage variable
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data submitted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];

    // Database connection
    $database = new mysqli("localhost", "root", "", "doct");
    if ($database->connect_error) {
        die("Connection failed: " . $database->connect_error);
    }

    // SQL query to insert data into contact_info table
    $sql = "INSERT INTO contact_info (name, email, phone, subject) VALUES ('$name', '$email', '$phone', '$subject')";

    if ($database->query($sql) === TRUE) {
        $successMessage = "Successfully sent";
    } else {
        echo "Error: " . $sql . "<br>" . $database->error;
    }

    $database->close();
}

?>

  
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-3 border-bottom border-light-subtle sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">DoctFind</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Home1">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Contact">Contact</a>
              </li>
              <a href="#Home" type="submit" class="btn btn-info text-white">Make Appointment</a>
            </ul>
          </div>
        </div>
      </nav>
      <section id="Home1"class="py-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="w-75 m-auto">
                <img class="mySlides" src="/doctfind/img/sajith3.jpg" style="width:100%">
                <img class="mySlides" src="/doctfind/img/sajith7.jpg" style="width:100%">
                <img class="mySlides" src="/doctfind/img/sajith8.png" style="width:100%">
              </div>
              
              <script>
              var myIndex = 0;
              carousel();
              
              function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2000); // Change image every 2 seconds
              }
              </script>
            </div>
          </div>
          
        </div>
      </section>

      <section id="Home"class="banner text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="w-75 m-auto">
                        <h1 class="pb-3 text-uppercase">Are You Ready To Booking ?</h1>
                        <p class="pb-4" align="justify"> "DoctFind is a state-of-the-art online platform revolutionizing healthcare access. It provides seamless appointment scheduling that connects patients with a wide variety of healthcare professionals. With user-friendly navigation, patients can easily find, book and manage appointments with doctors of their choice. Specialists. DoctFind simplifies the healthcare journey, providing users with quality empowers effective access to care. With its intuitive interface and comprehensive database, it ensures a hassle-free experience for both patients and healthcare providers. Experience convenience and ease in healthcare booking with your trusted DoctFind. Partner in accessible and efficient healthcare.”</p>
                        <a href="signup.php"class="btn btn-primary me-md-3 style="padding-left: 2.5rem; padding-right: 2.5rem;"" type="button">Signup</a>
                        <a href="login.php"class="btn btn-light me-md-3 style="padding-left: 2.5rem; padding-right: 2.5rem;"" type="button">Login</a>
                        
                    </div>
                </div>
            </div>
        </div>
      </section>

      <section id="About" class="py-5" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="padding-bottom-2 text-center"> About </h4>
                    <p align="justify">DocTfind simplifies healthcare access by providing an intuitive online booking platform. Our user-friendly interface empowers patients to effortlessly schedule appointments with trusted healthcare providers, ensuring convenience and timely care. With a wide variety of medical specialties and practitioners, DocTfind prioritizes patient needs, providing a seamless experience for booking consultations, exams and treatments. We prioritize reliability, transparency and accessibility, creating a safe environment for managing patients' healthcare needs. Join us in revolutionizing healthcare access through the power of technology, simplifying booking appointments and improving patient-physician relationships.</p>
                </div>
                
                <div class="col-md-6 text-center">
                    <img src="/doctfind/img/sajith1.jpg" alt="booking image" class="img-fluid w-75">
                    
                </div>
            </div>
        </div>
      </section>

      <section id="Service" class="bg-info-subtle skill-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center pb-4">Service</h4>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-3">
                    <div class="card" >
                        <img src="/doctfind/img/Accident and emergency medicine.jpg" class="card-img-top m-auto" alt="doctor">
                        <div class="card-body">
                            <h5 class="card-title text-center">Emergency medicine</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="card" >
                      <img src="/doctfind/img/Allergology.jpg" class="card-img-top m-auto" alt="doctor">
                      <div class="card-body">
                          <h5 class="card-title text-center">Allergology</h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card" >
                    <img src="/doctfind/img/Anaesthetics.jpg" class="card-img-top m-auto" alt="doctor">
                    <div class="card-body">
                        <h5 class="card-title text-center">Anaesthetics</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
              <div class="card" >
                  <img src="/doctfind/img/Biological hematology.jpg" class="card-img-top m-auto" alt="doctor">
                  <div class="card-body">
                      <h5 class="card-title text-center">Biological hematology</h5>
                  </div>
              </div>
          </div>
                
            </div>
            <div class="row coloum2-padding"  >
              <div class="col-md-3">
                  <div class="card" >
                      <img src="/doctfind/img/Cardiology.jpg" class="card-img-top m-auto" alt="doctor">
                      <div class="card-body">
                          <h5 class="card-title text-center">Cardiology</h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card" >
                    <img src="/doctfind/img/Child psychiatry.jpg" class="card-img-top m-auto" alt="doctor">
                    <div class="card-body">
                        <h5 class="card-title text-center">Child psychiatry</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
              <div class="card" >
                  <img src="/doctfind/img/Clinical biology.jpeg" class="card-img-top m-auto" alt="doctor">
                  <div class="card-body">
                      <h5 class="card-title text-center">Clinical biology</h5>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="card" >
                <img src="/doctfind/img/Clinical chemistry.jpg" class="card-img-top m-auto" alt="doctor">
                <div class="card-body">
                    <h5 class="card-title text-center">Clinical chemistry</h5>
                </div>
            </div>
        </div>
              
          </div>
        </div>
        
      </section>


            <section id="Contact" class="bg-primary bg-gradient text-white skill-padding">
          <div class="container">
              <div class="row">
                  <h4 class="text-center pb-4">Contact</h4>
              </div>
              <div class="row justify-content-center">
                  <div class="col-md-6">
                  <?php
                    // Display success message if it exists
                    if (!empty($successMessage)) {
                        echo '<div class="alert alert-success" role="alert">' . $successMessage . '</div>';
                        // Use JavaScript to redirect after 2 seconds
                        echo '<script>setTimeout(function(){ window.location.href = "index.php"; }, 2000);</script>';
                    }
                  ?>
                      <form method="post" action="">
                          <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" name="name" class="form-control" id="name" required>
                          </div>
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" name="email" class="form-control" id="email" required>
                          </div>
                          <div class="mb-3">
                              <label for="phone" class="form-label">Phone No</label>
                              <input type="tel" name="phone" class="form-control" id="phone" required>
                          </div>
                          <div class="mb-3">
                              <label for="subject" class="form-label">Subject</label>
                              <textarea name="subject" class="form-control" id="subject" rows="3" required></textarea>
                          </div>
                          <button type="submit" class="btn btn-info text-white">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </section>

      
      <section class="py-5 text-Blue text-black bg-info-subtle" >
        <div class="container bootstrap">
          <div class="row">
            <div class="col-md-6">
              <h4>DoctFind</h4>

            </div>
            <div class="col-md-6">
              <ul class="nav justify-content-center pb-4 mb-3 ">
                <li class="nav-item">
                  <a class="nav-link active text-black" aria-current="page" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" href="#About">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" href="#Service">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" href="#Contact">Contact</a>
                </li>
              </ul>
          </div>
          <div class="text-center border-top border-secondary py-4 ">
            <p class="text-muted mb-0 text-white">Copyright: 2024 design By Doctfind Web Solution</p>
          </div>
        </div>
      </section>
      </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
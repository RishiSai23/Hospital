<!doctype html>
<html lang='en'>
<head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Evercare - Medical and Doctor Directory </title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
</head>
<body>
<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="doctors.php">Doctors</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="FAQ.php">FAQ</a></li>
								<li><a href="appointment.php">Appointment</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+880 1234 56789</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			
	<section class="contact-us section">
				<div class="container">
					<div class="inner">
						<div class="row"> 
							<div class="col-lg-6">
								<div class="contact-us-left">
								
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.720183221922!2d91.8469776759956!3d22.40190373920358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2782e6299a61%3A0x459db4c66339430c!2sEvercare%20Hospital%20Chattogram!5e0!3m2!1sen!2sin!4v1734684052047!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
								</div>
							</div>
							<div class="col-lg-6">
								<div class="contact-us-form">
									<h2>Book An Appointment</h2>
									<p>If you have any questions please fell free to contact with us.</p>
									<!-- Form -->
									<form class="form" method="post" action="">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<input type="text" name="name" placeholder="Name" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<input type="email" name="email" placeholder="Email" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<input type="text" name="phone" placeholder="Phone" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<input type="text"  placeholder="Doctor">
													<select name="doctor" required="">
														<option>(select one)</option>
														<option>Dr. Aaron Jones</option>
														<option>Dr. James Murphy</option>
														<option>Dr. Jean Doe</option>
														<option>Dr. Elon Musk</option>
														<option>Dr. Sam Curran</option>
														<option>Dr. Amy Matthew</option>
														<option>Dr. Tom Curran</option>
														<option>Dr. Richards</option>
												    </select>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<textarea name="symptoms" placeholder="Symptoms" required=""></textarea>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group login-btn">
													<button class="btn" type="submit">Send</button>
												</div>
												
											</div>
										</div>
									</form>
									<?php
									if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medcare";

    // Collect form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$doctor = trim($_POST['doctor']);
    $symptoms = trim($_POST['symptoms']);


    // Create a MySQLi connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare an SQL query
    $sql = "INSERT INTO appointment (name, email, phone, doctor, symptoms) VALUES ('$name', '$email', '$phone', '$doctor', '$symptoms')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting us!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

								</div>
							</div>
						</div>
					</div>
				</div>
</body>
</html>


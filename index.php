<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
		type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>



	
	<style>
		/* Make the header fit the viewport */


		body {
			margin: 0;
			font-family: "Work Sans", Arial, sans-serif;
			background-color: #f9f6f6;
			/* Light background color for contrast */
		}

		.section {
			text-align: center;
		}

		/* Desktop Banner */
		.banner {
			position: relative;
			width: 100%;
			max-width: 1320px;
			height: 800px;
			margin: 0 auto;
			background-image: url('images/1.1.jpg');
			/* Replace with desktop background image */
			background-size: cover;
			background-position: center;
			overflow: hidden;
		}

		.banner .video-container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 280px;
			height: 280px;
			border-radius: 50%;
			overflow: hidden;
		}

		.banner .video-container video {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		/* Mobile Banner */
		.mobile-banner {
			display: none;
			position: relative;
			width: 100%;
			max-width: 480px;
			height: 800px;
			margin: 0 auto;
			background-image: url('images/1.2.jpg');
			/* Replace with mobile background image */
			background-size: cover;
			background-position: center;
			overflow: hidden;
		}

		.mobile-banner .video-container {
			position: absolute;
			top: 55.5%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 225px;
			height: 225px;
			border-radius: 50%;
			overflow: hidden;
		}

		.mobile-banner .video-container video {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		/* Text Inside Banner */
		.banner-text {
			position: absolute;
			bottom: -3px;
			width: 100%;
			text-align: center;
			color: white;
			font-weight: bold;
			/* text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5); */

		}


		.banner-text h2 {
			margin: 10px 0;
		}

		.banner-text .event-date {
			font-size: 30px;
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.banner {
				display: none;
			}

			.mobile-banner {
				display: block;
			}
		}




		#fh5co-header {
			position: relative;
			height: 100vh;
			/* 100% of the viewport height */
			overflow: hidden;
		}

		/* Video styles */
		#fh5co-header video {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 100%;
			height: 100%;
			object-fit: cover;
			z-index: -1;
			/* Place video behind content */
		}

		/* Center content container */
		#fh5co-header .content-container {
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
			text-align: center;
			padding-bottom: 50px;
			/* Adjust spacing from the bottom */
			z-index: 1;
		}

		/* Style for the names */
		#fh5co-header .names {
			font-size: 60px;
			line-height: 1.2;
			font-family: "Work Sans", Arial, sans-serif;
			color: #fff;
			margin-top: 20px;
		}

		/* General styles for decorative elements */
		.decorative-circle {
			display: inline-block;
			margin-bottom: 20px;
			color: #fff;
			font-size: 18px;
			font-family: Arial, sans-serif;
		}

		/* Responsive adjustments */
		@media screen and (max-width: 768px) {
			#fh5co-header .names {
				font-size: 40px;
			}
		}

		@media screen and (max-width: 480px) {
			#fh5co-header .names {
				font-size: 30px;
			}
		}

		.celestial-container {
      font-family: "Work Sans", Arial, sans-serif;
      background-color:#f3eae1;
      color: #99916e;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 20px;
  }

  .celestial-title {
      font-size: 2em;
      font-weight: bold;
      margin-bottom: 10px;
  }

  .celestial-subtitle {
      font-size: 1.5em;
      font-style: italic;
      margin-bottom: 5px;
  }

  .celestial-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      width: 100%;
      position: relative;
  }

  .celestial-text-left,
  .celestial-text-right {
      font-size: 1em;
      line-height: 1.6;
  }

  .celestial-image-container {
      position: relative;
      width: 100%;
      max-width: 300px;
  }

  .celestial-image-container img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 8px; /* Optional: for a softer look */
  }

  /* Overlay Text for Mobile */
  .overlay-text {
      position: absolute;
      top: 10%;
      left: 50%;
      transform: translateX(-50%);
      font-size: 1.2em;
      color: #ffffff;
      font-weight: bold;
      text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.8);
      text-align: center;
      display: none; /* Hidden by default for desktop */
  }

  /* Responsive Styles for Desktop */
  @media (min-width: 768px) {
      .celestial-content {
          flex-direction: row;
          gap: 40px;
      }

      .celestial-text-left,
      .celestial-text-right {
          flex: 1;
          max-width: 30%;
          padding: 20px;
          text-align: center;
      }

      .celestial-image-container {
          flex: 1;
          max-width: 40%;
      }

      .mobile-only {
          display: none;
      }
  }

  /* Responsive Styles for Mobile */
  @media (max-width: 767px) {
      .desktop-only {
          display: none;
      }

      .mobile-only {
          display: block;
      }

      .celestial-content {
          align-items: center;
      }

      .overlay-text {
          display: block;
          top: 15%;
      }
  }
/* Add this to your existing CSS */
.celestial-image-container {
  overflow: hidden; /* Ensures the zoomed image stays within container */
  border-radius: 8px; /* Match your image's border-radius */
}

.celestial-image-container img {
  animation: zoomInOut 8s ease-in-out infinite;
  transform-origin: center center; /* Ensures zoom starts from center */
}

@keyframes zoomInOut {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
}



.location-container {
			max-width: 900px;
			margin: 30px auto;
			padding: 20px;
			text-align: center;
			background-color : #f3eae1;
			/* Soft beige background */
			border: 1px solid #d8cfc4;
			/* Light border color */
			border-radius: 2px;
			/* Rounded corners */
		}

		.location-title {
			font-size: 2em;
			margin-bottom: 20px;
			font-weight: bold;
			color: #6a6a6a;
			/* Muted text color */
			font-family: "Work Sans", Arial, sans-serif;
			/* Elegant font style */
		}

		.map-container {
			position: relative;
			width: 100%;
			overflow: hidden;
			padding-top: 56.25%;
			/* 16:9 Aspect Ratio */
			border: 1px solid #d8cfc4;
			/* Light border around the map */
			border-radius: 8px;
			/* Slightly rounded corners for the map */
		}

		.map-container iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: 0;
			/* No iframe border */
		}


		@keyframes zoom {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(1.1);
  }
}

.banner .video-container img,
.mobile-banner .video-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  animation: zoom 20s ease-in-out infinite alternate;
}

/* Existing CSS remains unchanged */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color:#f3eae1;
}

.section {
  text-align: center;
}

.banner {
  position: relative;
  width: 100%;
  max-width: 1320px;
  height: 800px;
  margin: 0 auto;
  background-image: url('images/1.1.jpg');
  background-size: cover;
  background-position: center;
  overflow: hidden;
}

.banner .video-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 280px;
  height: 280px;
  border-radius: 50%;
  overflow: hidden;
}

	


.banner-1 {
    position: relative;
    width: 100%;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    padding-bottom: 50px;
    overflow: hidden; /* Keep this to contain the zoom effect */
}

/* Add pseudo-element for background with animation */
.banner-1::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('images/23.jpeg');
    background-size: cover;
    background-position: center;
    animation: zoomAnimation 20s ease-in-out infinite;
    z-index: -1;
}

@keyframes zoomAnimation {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

/* Ensure text content stays on top */
.banner-text-1 {
    position: relative; /* Add this to maintain stacking context */
    z-index: 1;
    text-align: center;
    color: white;
    background: rgba(99, 91, 91, 0.5);
    padding: 20px;
    width: 80%;
    max-width: 500px;
    border-radius: 10px;
}

/* Media query adjustment */
@media (max-width: 768px) {
    .banner-1::before {
        background-image: url('images/23.jpeg');
    }
}


   	.simply-countdown {
			/* The countdown */
			margin-bottom: 2em;
		}

		.simply-countdown>.simply-section {
			/* coutndown blocks */
			display: inline-block;
			width: 100px;
			height: 100px;
			background: none;
			margin: 0 4px;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			-ms-border-radius: 50%;
			border-radius: 50%;
			position: relative;
			animation: pulse 1s ease infinite;
		}

		@keyframes pulse {
			0% {
				transform: scale(1);
			}

			50% {
				transform: scale(1.05);
			}

			100% {
				transform: scale(1);
			}
		}

		.simply-countdown>.simply-section>div {
			/* countdown block inner div */
			display: table-cell;
			vertical-align: middle;
			height: 100px;
			width: 100px;
		}

		.simply-countdown>.simply-section .simply-amount,
		.simply-countdown>.simply-section .simply-word {
			display: block;
			color: white;
			/* amounts and words */
		}

		.simply-countdown>.simply-section .simply-amount {
			font-size: 30px;
			/* amounts */
		}

		.simply-countdown>.simply-section .simply-word {
			color: rgba(255, 255, 255, 0.7);
			text-transform: uppercase;
			font-size: 12px;
			/* words */
		}
	</style>
</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<!-- <div id="fh5co-logo"><a href="index.html">Wedding<strong>.</strong></a></div> -->
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.php" style="color:#99916e;">Home</a></li>
							<li><a href="about.php" style="color:#99916e;">Our Story</a></li>
							<li class="has-dropdown"><a href="contact.php" style="color:#99916e;">Contact</a></li>
							<li style="background-color: #99916e; border-radius: 2px;"><a href="login.php"
									style="color:#f3f2ec;">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
                                   
		<div class="banner section">
			<div class="video-container">
			 <video autoplay loop muted playsinline>
					<source src="images/111.mp4" type="video/mp4"> 
					Your browser does not support the video tag.
				</video>
				<!-- <img src="images/7.7.jpg" alt="" hight="400px" width="330px" style=""> -->
			</div>
			<div class="banner-text">
				<h2 style="font-size: 23px;">A CELESTIAL UNION OF LOVE</h2>
				<h2 class="event-date"> 5<sup>TH</sup> - 6<sup>TH</sup> MARCH 2025</h2>
			</div>
		</div>

		<!-- Mobile Banner -->
		<div class="mobile-banner section">
			<div class="video-container">
				 <video autoplay loop muted playsinline>
					<source src="images/111.mp4" type="video/mp4"> 
					Your browser does not support the video tag.
				</video> 
				<!-- <img src="images/7.7.jpg" alt="" hight="400px" width="300px"> -->
			</div>
			<div class="banner-text" style=" bottom: 4px;">
				<h2 style="font-size: 23px;">A CELESTIAL UNION OF LOVE</h2>
				<h2 class="event-date">5 <sup>TH</sup> - 6<sup>TH</sup> MARCH 2025</h2>
			</div>
		</div>


		<div class="banner-1">
			<div class="banner-text-1">
				<!-- <h2 style="color:rgb(236, 235, 230); font-family:'Georgia', serif;">Our Story</h2> -->
				<h3 style="color:rgb(241, 240, 232); font-family:'Georgia', serif;">JOIN US ON A CHERISHED JOURNEY <br> FILLED WITH LOVE, JOY, AND ETERNAL BLISS
				</h3>
			</div>
		</div>



		<div class="celestial-container">
			<div class="celestial-subtitle">JOURNEY OF</div>
			<div class="celestial-title">CELESTIAL CELEBRATIONS</div>
			<div class="celestial-content">
				<div class="celestial-text-left">
					<p><span style="font-weight: bold;">OUR STORY</span></p>
				</div>
				<div class="celestial-image-container">
					<img src="images/22.jpeg" alt="A couple in traditional attire, elegantly posed">
					<div class="overlay-text mobile-only">
						<!-- <p><span style="font-weight: bold;">OUR STORY</span></p> -->
						<p><span style="font-weight: bold;">WRITTEN IN THE STARS</span></p>
					</div>
				</div>
				<div class="celestial-text-right desktop-only">
					<p><span style="font-weight: bold;">WRITTEN IN THE STARS</span></p>
				</div>
			</div>
		  </div>



		  <?php include 'caard.php';?>

		  <?php include 'DressCode.php';?>


		<div id="fh5co-gallery" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						
						<h2 style="color:#99916e;">Pre-Wedding Gallery</h2>
						<p style="color:#99916e;">Here’s a glimpse of our timeless memories together
						</p>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-gallery-list">

							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/8.8.jpeg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/38.jpeg); ">
							

							</li>


							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/9.4.jpg); ">
								

								
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/6.jpg); ">
								

								
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/9.jpg); ">
							

								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/7.jpg); ">
								

								
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/4.jpg); ">
							
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/5.jpg); ">
							

							
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/1.jpg); ">
								

							
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/2.jpg); ">
								

						
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/3.jpg); ">
							
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/11.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/15.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/16.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/22.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/20.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/21.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/19.jpg); ">
							
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/17.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/23.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/24.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/26.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/25.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/27.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/30.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/31.jpg); ">
							
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/6.3.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/34.jpg); ">
								
							</li>
							
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/7.1.jpg); ">
								
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn"
								style="background-image: url(Gallary/6.2.jpg); ">
							
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="location-container">
			<h2 class="location-title">LOCATION</h2>
			<div class="map-container">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14238.370201921505!2d73.00781491301327!3d26.23894648298344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c1c3b4d76eb%3A0x1d4b63c1c3b4d7e!2sJodhpur%2C%20Rajasthan%2C%20India!5e0!3m2!1sen!2sin!4v1694259649153!5m2!1sen!2sin"
					allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
				</iframe>
			</div>
		</div>


     <div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/666.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <p style="font-family: 'Arial', sans-serif;">
                    Please let us know if you'll be joining us on our special day.</p>
                <div class="simply-countdown simply-countdown-one"></div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                <form id="rsvpForm" class="form-inline">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="username" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <button type="submit" class="btn btn-default btn-block">Send RSVP</button>
                    </div>
                </form>
                <p id="responseMessage" style="margin-top: 10px; font-weight: bold;"></p>
            </div>
        </div>
    </div>
</div>

<!-- jQuery Script for AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#rsvpForm").submit(function (event) {
            event.preventDefault(); // Prevent normal form submission

            $.ajax({
                url: "Admin/guest.php",
                type: "POST",
                data: $(this).serialize(), // Serialize form data
                success: function (response) {
                    $("#responseMessage").html(response).css("color", "green");
                    $("#rsvpForm")[0].reset(); // Clear form fields
                },
                error: function () {
                    $("#responseMessage").html("Something went wrong. Try again!").css("color", "red");
                }
            });
        });
    });
</script>


		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2025 All Rights Reserved.</small>
							<small class="block">Designed by <a href="" target="_blank">Shivam
									Rawat</a>
						</p>
						<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

	<script>
		// Set the target date explicitly to 6th March of the current year
         var d = new Date(new Date().getFullYear(), 2, 6); // Month is zero-indexed (2 = March)


		// default example
		simplyCountdown('.simply-countdown-one', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate()
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate(),
			enableUtc: false
		});



	</script>

</body>

</html>
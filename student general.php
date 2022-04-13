<!DOCTYPE html>
<html>
<head>
<title>Student Genral</title>
<link rel="stylesheet" href="StdGen.css">
</head>

<body>
    <!-- Animated navigation bar -->
    <nav class="navMenu">
      <a href="#home">Home</a>
      <a href="#mealBook">Meal Booking</a>
      <a href="#">Market</a>
      <a href="#help">Help</a>
      <div class="animation start-home"></div>
    </nav>
    
    <!-- No of days remaining dial -->
    <div class="countdown" id="home">

    </div>

    <!-- Meal booking -->
    <div class="mealBook" id="mealBook">

    </div>

    <!-- FAQs -->
    <div class="faq" id="help">
     <div class="faqBox">
        <p class="heading">Frequently Asked Questions (FAQS)</p>
        <button class="accordion">Question 1</button>
        <div class="panel">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    
        <button class="accordion">Question 2</button>
        <div class="panel">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    
        <button class="accordion">Question 3</button>
        <div class="panel">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
     </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <p>Project By <a class="link" href="#"> Gayatri Rout </a>, <a class="link" href="#"> Manyapu Shreya </a>, <a class="link" href="#"> Tatwamasi Mishra </a>, <a class="link" href="#"> Yashica Pradhan </a></p>
   </div>

   <!-- Contact Form -->
   <div class="mailbg">
	  <label class="l1" for="mailinput">Your Email:</label>
  	<input class="mailinput" aria-label="Your Email" autocomplete="on" type="email" placeholder="">
  	<label class="l2" for="messtxt">Your Message:</label>
  	<textarea class="messtxt" aria-label="Your Message" placeholder=""></textarea>
  	<button class="sendmess" aria-label="Send message">Send<div class="bar"></div></button>
  	<div class="success">Message sent successfully.<br><br>Thanks!</div>
  	<button class="closemess" aria-label="Close Form">Close</div></button>
   </div>

</body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="contactForm.js"></script>
<script type="text/javascript" src="Accordion.js"></script> 
<script type="text/javascript" src="Navbar.js"></script>
</html> 
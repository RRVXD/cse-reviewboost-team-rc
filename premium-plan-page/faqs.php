<!DOCTYPE html>
<html>
<head>
	<title>CSE ReviewBoost</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<header>
		<div id="header-title">CSE Prof and Sub-Prof ReviewBoost</div>
	</header>

	<div class="homepage">
    <?php session_start(); ?>

<h1><?php echo $_SESSION['username']; ?></h1>
        <button onclick="logout()">Logout</button>
    </div>
    
    <script type="text/javascript">
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>

	<div class="sidebar">
		<img class="logo" src="image-14.png" alt="Image 14">
		<a href="premium.php">Premium Plan</a>
        <a href="extend.php">Extend Plan</a>
        <a href="faqs.php" class="active">FAQs</a>
		<a href="contact.php">Contact</a>
        <a href="about.php">About</a>
	</div>

	<div class="contents">

		<div class="accordion">
			<div class="accordion-item">
			  <div class="accordion-header">How much are the premium plans?</div> <br>
			  <div class="accordion-content">
				<p>> 99 pesos Monthly</p>
				<p>> 999 pesos Yearly (Save 189 pesos or 16% Discount)</p>
			  </div>
			</div>
			<div class="accordion-item">
			  <div class="accordion-header">What are the features of free and premium plans?</div> <br>
			  <div class="accordion-content">
				<p>> Free Plan (Videos, PDFs)</p>
				<p>> Premium Plan (Videos, PDFs, Lessons, Quizzes, Mock Test)</p>
			  </div>
			</div>
			<div class="accordion-item">
			  <div class="accordion-header">How to avail premium plan?</div> <br>
			  <div class="accordion-content">
				<p>> To avail premium plan you need to fill out the given form in the premium plan section.</p>
			  </div>
			</div>
			<div class="accordion-item">
				<div class="accordion-header">What is the difference between CSE Professional and Sub-Professional?</div> <br>
				<div class="accordion-content">
				  <p>> The main difference between the Professional and Sub-Professional levels is the complexity and scope of the 
					exam. The Professional level exam is more difficult and covers a wider range of topics than the Sub-Professional 
					level exam.</p>
				  <p>> Professional or 2nd-Level Eligibility which qualifies you for second-level position while the Sub-professioanl 
					or 1st-Level Eligibility qualifies you for clerical and custodial service positions in the government.</p>
				</div>
			  </div>
			  <div class="accordion-item">
				<div class="accordion-header">What are the application requirements for CSE?</div> <br>
				<div class="accordion-content">
				  <p>> CSC Form 100</p>
				  <p>> 4 pcs. of Passport Size Pictures</p>
				  <p>> Valid ID</p>
				  <p>> If your only available ID does not contain your birth date, submit a copy of your NSO or PSA Birth Certificate.</p>
				  <p>> 500 pesos</p>
				  <p>> If you have dual citizenship under RA 9225, submit a copy of a Certificate of Retention/Re-acquisition of Philippine 
					Citizenship issued by the Bureau of Immigration.</p>
				</div>
			  </div>
		  </div>			
		  
	</div>

	<script src="script.js"></script>
</body>
</html>
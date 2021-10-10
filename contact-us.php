<?php include('header.php'); 


// submiting contact form
$complted = 1;
$successMsg = $registerError = $fnameError = "";
if (isset($_POST['register']) && $complted==1 ){
	$firstName = $lastName = $email = $mobile = $subject = $desciption='';
	$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
	$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
	$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
	$description = isset($_POST['description']) ? $_POST['description'] : '';

	if($firstName != ''){

		$sql = "INSERT INTO contact_details (firstName, lastName, email,mobile, subject, description) VALUES ('".$firstName."','".$lastName."','".$email."','".$mobile."','".$subject."','".$description."')";
		if(mysqli_query($conn, $sql)){
		    $successMsg = "Record inserted successfully.";
		    $_POST['register'] = '';
		    $complted = 0;
		} else{
		    $registerError = "ERROR: Could not able to execute. " . mysqli_error($conn);
		}
	}else{
		$fnameError = "PLease enter First Name";
	}


}
?>

<header class="site-header">

<?php include('header-menu.php'); ?>
	<div class="swiper-container hero-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide bgheight" style="background:url(images/header-bg.jpg) no-repeat;" >
				<div class="hero-content">
					<div class="container">
						<div class="row">
							<div class="col flex flex-column justify-content-center">
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	


</header>


<div class="homepage-info-section contentpg">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12">
				<!-- <header class="entry-header">
					<h2 class="entry-title">Contact Us</h2>
				</header> -->
				<div class="entry-content">
					
				</div>

			</div>
		</div>	
		<div class="row">
			<div class="col-12 col-md-4 col-lg-5">
				<figure>
					<img src="images/about.jpeg" alt="logo">
				</figure>
			</div>
			<div class="col-12 col-md-8 col-lg-7">
			<div class="shedow-bx">
				<header class="entry-header">
					<h2 class="entry-title"><?= $label['lbl_contact_us_ttl'] ?></h2>
				</header>
				<div class="entry-content">
					<header class="entry-header">
						<p ><strong><i class="fa fa-map-marker fa-2x" style="font-size:25px;"></i></strong><br> <?=$res_social['office_address']?></p>
						<p ><strong><i class="fa fa-envelope fa-2x"  style="font-size:25px;"></i></strong><br> <?=$res_social['email_1']?></p>
					
					<p ><strong>Social media:</strong></p>
					
					<ul class="flex flex-wrap justify-content-center align-items-center">
						<li><a href="<?=$res_social['youtube_link']?>"><i class="fa fa-youtube"></i></a></li>
						<li><a href="<?=$res_social['face_link']?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?=$res_social['insta_link']?>"><i class="fa fa-instagram"></i></a></li>
						<li><a href="<?=$res_social['twiter_link']?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?=$res_social['linkedin_link']?>"><i class="fa fa-linkedin"></i></a></li>
					</ul>


					</header>
				</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="newsletter-subscribe">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<header class="entry-header">
					<h2 class="entry-title">Get in Touch</h2>
				</header>
				<div class="row">
					<div class="col-md-12">
						<?php if(strlen($successMsg)){ sleep(10); ?>
						<div class="alert alert-success marginClsmt-50" role="alert">
					    <?=$successMsg?>
					  </div>
					<?php } ?>
						<?php if(strlen($registerError)){ ?>
						<div class="alert alert-danger nomsg" role="alert">
						  <?=$registerError?>
						</div>
					 <?php } ?>
					</div>
				</div>
				<div class="newsletter-form">
					<form class="justify-content-center align-items-center" id="form_submit" method="post" enctype="multipart/form-data">
						<div class="form-row">
						    <div class="form-group col-md-12">
						    	<input type="text" name="firstName"  id="firstName" placeholder="<?=$label['lbl_first_name']?>" required="required">
							</div>
						</div>
						<div class="form-row">
						    <div class="form-group col-md-12">
						    	<input type="text" name="lastName"  id="lastName" placeholder="<?=$label['lbl_last_name']?>" required="required">
							</div>
						</div>
						<div class="col-md-12 col-lg-12">
							<input type="email" name="email"  placeholder="<?=$label['lbl_email']?>">
						</div>
						<div class="col-md-12 col-lg-12">
							<input type="text" name="mobile"  placeholder="<?=$label['lbl_mobile']?>" required="required">
						</div>

						<div class="col-md-12 col-lg-12">
							<input type="text" name="subject"  placeholder="<?=$label['lbl_subject']?>">
						</div>
						<div class="col-md-12 col-lg-12">
							<input type="text" name="description" placeholder="<?=$label['lbl_message']?>">
						</div>
						<div class="col-md-12">
							<input class="btn gradient-bg formbtnleft" type="submit" name="register" value="<?=$label['lbl_contact_us']?>">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('portfolio.php'); ?>

<?php include('footer.php'); ?>
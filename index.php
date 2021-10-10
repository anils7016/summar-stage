<?php include('header.php'); 

$res = mysqli_query($conn,"SELECT * FROM category");
//$res = mysqli_fetch_array($result);

$res_evnt = mysqli_query($conn,"SELECT * FROM events limit 7");

$res_banner = mysqli_query($conn,"SELECT * FROM banner where status =1 ");

$evnt=1;

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

<style type="text/css">
	.swiper-container {
/*  width: 100%;*/
  /*height: 100vh;*/
}

.swiper-slide {
  overflow: hidden;
}

video {
/*  margin-left: calc((100vw - (100vh * 1.7))/2);
  margin-right: calc((100vw - (100vh * 1.7))/2);*/
  /*min-height: 100vh;*/
  /*min-width: 100vw;*/
/*  width: 100%;*/
}

@media (min-aspect-ratio: 16/9) {
/*  video {
    margin-left: 0;
  }*/
}

</style>


<header class="site-header">

<?php include('header-menu.php'); ?>

<!-- https://codepen.io/ksiabani/pen/qNvLKY -->
	<!-- Slider main container -->
    <div class="swiper-container homeresp">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper homeslider">
        <!-- Slides -->
        <?php 
        	$sliderNo = 1;
        	while($row_banner = mysqli_fetch_array($res_banner)){ 
        	$banner_file = $row_banner[$langName.'banner'] ? $row_banner[$langName.'banner'] : 'http://sumaarstage.in/summar-admin//assets/banner/bannerdefault.mp4';

        	$sliderbtnUrl = 'about-us';
        	$sliderbtnText = 'Know More';
        	$slidecls = 'slidediv';
        	if($sliderNo!=1){
        		$sliderbtnText = 'Register';
        		$slidecls = 'slidediv1';
        	}
        	if($sliderNo==2){
        		$sliderbtnUrl = 'singer';
        	}else if($sliderNo==3){
        		$sliderbtnUrl = 'shayar';
        	}else if($sliderNo==4){
        		$sliderbtnUrl = 'actors';
        	}else if($sliderNo==5){
        		$sliderbtnUrl = 'videographer';
        	}else{
	        	$sliderbtnUrl = 'about-us';
	        	$sliderbtnText = 'Know More';
        		$slidecls = 'slidediv';
        	}
        	?>
        <div class="swiper-slide video">
          <video src="<?=$banner_file ?>" autoplay muted width="100%"></video>

          		<footer class="entry-footer <?=$slidecls?>">
								<a href="<?=$sliderbtnUrl?>" class="btn gradient-bg sliderbtn"><?=$sliderbtnText?></a>
						</footer>
        </div>
      <?php $sliderNo++ ; } ?>

      </div>
      <!-- If we need pagination -->
<!--       <div class="swiper-pagination"></div> -->

      <!-- If we need navigation buttons -->
      <!-- <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div> -->
      <div class="swiper-button-next flex justify-content-center align-items-center">
			<span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" /></svg></span>
		</div>
		<div class="swiper-button-prev flex justify-content-center align-items-center">
			<span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" /></svg></span>
		</div>
      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
      
    </div>


</header>

<?php include('category.php');  ?>

<div class="homepage-info-section ">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-5">
				<figure>
					<img src="images/about.jpeg" alt="logo">
				</figure>
			</div>
			<div class="col-12 col-md-8 col-lg-7">
				<header class="entry-header">
					<a href="about-us.php"><h2 class="entry-title">What is Summar Stage and why choose our services?</h2></a>
				</header>
				<div class="entry-content">
					<?php if(isset($cms_arr['aboutS1'])) echo $cms_arr['aboutS1']['c_desc']; ?>
				</div>
				<footer class="entry-footer">
					<a href="about-us.php" class="btn gradient-bg"><?=$label['lbl_read_more']?></a>
					<!-- <a href="#" class="btn dark">Register Now</a> -->
				</footer>
			</div>
		</div>
	</div>
</div>

<div class="homepage-featured-events" style="min-height: 100px;">
	<div class="container">
			<div class="row">
			<div class="next-events-section-header">
				<h2 class="entry-title text-white">COMING SOON</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
					
				<div class="featured-events-wrap flex flex-wrap justify-content-between">
					<?php while($row_evnt = mysqli_fetch_array($res_evnt)){ ?>
				
					<div class="event-content-wrap homeevent positioning-event-<?php echo $evnt++; ?>">
						<figure>
							<a href="#"><img src="<?php echo $row_evnt['image']; ?>" alt="1"></a>
						</figure>
						<header class="entry-header">
							<h3 class="entry-title"><?php echo $row_evnt['event_name']; ?></h3>
							<div class="posted-date"><?php 
								echo globalDateformat($row_evnt['event_date']); ?></div>
						</header>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php include('portfolio.php') ?>
<div class="newsletter-subscribe">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<header class="entry-header">
					<h2 class="entry-title">Let's work together</h2>
					<p>Join With Us NOW!</p>
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
						<div class="col-md-12 col-lg-12">
							<input type="text" name="firstName"  id="firstName" placeholder="<?=$label['lbl_first_name']?>" required="required">
						</div>
						<div class="col-md-12 col-lg-12">
							<input type="text" name="lastName"  id="lastName" placeholder="<?=$label['lbl_last_name']?>" required="required">
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
							<input class="btn gradient-bg formbtnleft" type="submit" name="register" value="<?=$label['lbl_join_us']?>">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->
<!-- Modal -->
<div class="modal fade" id="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12"><img src=""></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>

<style type="text/css">
@media (min-width: 992px) {
	.header-bar{
		background-color: #08011e;
	}
	.homeresp{
		top: 162px;
	}
	.homecat{
		margin-top: 160px;
	}
}	
</style>
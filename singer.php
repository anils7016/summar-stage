<?php include('header.php'); 

$result = mysqli_query($conn,"SELECT * FROM category where id=1");
$res = $result->fetch_assoc();

$cat_id = $cat_name = $cat_detail = $cat_url ='';
$cat_id = $res['id'];
$cat_name = $res['name'];
$cat_detail = $res[$langName.'detail'];
$cat_url = $res['icon'];

$complted = 1;
$successMsg = $registerError = $fnameError = "";
if (isset($_POST['register']) && $complted==1 ){
	$firstName = $lastName = $email = $mobile = $subject = $desciption = $file_url= $ext ='';
	$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
	$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
	$youtube_url = isset($_POST['youtube_url']) ? $_POST['youtube_url'] : '';
	
	$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
	//$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
	$description = isset($_POST['description']) ? $_POST['description'] : '';
	if ($_FILES["attachment"]["name"] != '' ) {
	      $pathToUpload = '/assets/category/singer/';
				$img1 = $_FILES['attachment']['name'];
				$ext = pathinfo($img1, PATHINFO_EXTENSION);
				$mainimg1 = preg_replace("/[^a-zA-Z0-9.]/", "", $img1);
				$file_url = sitefile_url.$pathToUpload.$mainimg1;
				$imagepath = uploadfile_url.$pathToUpload.$mainimg1;
				$image = $mainimg1;
				$imagetepath = $_FILES['attachment']['tmp_name'];
				move_uploaded_file($imagetepath, $imagepath);
	} else {
		$file_url = '';
	}
	if($firstName != ''){

		$sql = "INSERT INTO singer_details (firstName, lastName, email,mobile, gender, description, youtube_url, file_url, ext	) VALUES ('".$firstName."','".$lastName."','".$email."','".$mobile."','".$gender."','".$description."','".$youtube_url."','".$file_url."','".$ext."')";
		if(mysqli_query($conn, $sql)){
		    $successMsg = "Thank You ! successfully register.";
		    $_POST['register'] = '';
		    $complted = 0;

		 //  header("Location: " . $_SERVER['REQUEST_URI']);
			// exit();

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

<div class="homepage-next-events">
	<div class="container">
		<div class="row">
			<div class="next-events-section-header">
				<h2 class="entry-title">We offer</h2>
				<?php if(isset($cms_arr['singerS1'])) echo $cms_arr['singerS1']['c_desc']; ?>
			</div>
		</div>
	</div>
</div>		
<div class="homepage-info-section singersec1-pb">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-4">
				<figure class="catdetail_img">
					<img src="<?=$cat_url ?>" alt="Singer">
				</figure>
			</div>
			<div class="col-12 col-md-8 col-lg-7">
				<header class="entry-header">
					<h2 class="entry-title">Singer</h2>
				</header>
				<div class="entry-content">
					<p><?=$cat_detail?></p>
					
				</div>
			</div>
		</div>


	</div>
</div>
<div class="homepage-info-section stepsinger">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-7">
				<header class="entry-header">
					<h2 class="entry-title">Win every month – Free Professional Recording, Music Video, Promotion</h2>
				</header>
				<div class="entry-content">
					<p>summer stage singing competition is an ongoing process you can apply every month.</p>
					<p>every month we organize a talent hunt for our Gujarati singer where you can apply for free and every month, our jury selects 1 winner. </p>
					<p>Winners get a free professional audio recording, a music video, and a promotion on YouTube. So, get ready to shine your future. with us.</p>
					
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<figure class="catdetail_img">
					<img src="images/singer/singer-step1.png" alt="Singer">
				</figure>
			</div>
		</div>
		<div class="row stepsinger-mt">
			<div class="col-12 col-md-4 col-lg-4">
				<figure class="catdetail_img">
					<img src="images/singer/step2.png" alt="Singer">
				</figure>
			</div>
			<div class="col-12 col-md-8 col-lg-7">
				<header class="entry-header">
					<h2 class="entry-title">Compete from anywhere.</h2>
				</header>
				<div class="entry-content">
					<p><b>Sumaar Stage</b> is a fully digital platform for an open, transparent, competition between singers from all genres. Entries are judged by eminent musicians, and results are declared every month.</p>
					
				</div>
			</div>
		</div>
		<div class="row stepsinger-mt">
			<div class="col-12 col-md-8 col-lg-7">
				<header class="entry-header">
					<h2 class="entry-title">Easy to participate, no singing auditions needed</h2>
				</header>
				<div class="entry-content">
					<p>This is a fully digital contest. Participants just need to submit their track (audio or video) in two simple steps. Singers can submit raw audio without music or a composed track (with music is preferred).</p>
					
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<figure class="catdetail_img">
					<img src="images/singer/step3.png" alt="Singer">
				</figure>
			</div>
		</div>

	

	</div>
</div>

<div class="homepage-next-events mb-20">
	<div class="container">
		<div class="row">
			<div class="next-events-section-header">
				<h2 class="entry-title">Free entry submission</h2>
				<p>You can submit you entry for free. The submitted entries are screened by a team of musicians and well known singers. Only selected artists are invited to <b>Formalise</b> their entry.</p>
			</div>
		</div>
	</div>
</div>



<!-- FORM -->
<div class="newsletter-subscribe">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<header class="entry-header">
					<h2 class="entry-title">SUBMIT YOUR ENTRY NOW</h2>
					
				</header>
        <hr class="mb-4">
        
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
				<!-- Registration Form -->
				<?php include('register-form.php'); ?>
					
				</div>

			</div>
		</div> 
	</div>
</div>




<?php include('portfolio.php'); ?>

<script type="text/javascript">
	

//
</script>

<?php include('footer.php'); ?>


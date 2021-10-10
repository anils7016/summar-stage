<?php include('header.php'); 

$result = mysqli_query($conn,"SELECT * FROM category where id=2");
$res = $result->fetch_assoc();

$res_evnt = mysqli_query($conn,"SELECT * FROM events limit 7");

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
	$youtube_url = isset($_POST['youtube_url']) ? $_POST['youtube_url'] : '';
	$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
	$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
	$cat_type = isset($_POST['cat_type']) ? $_POST['cat_type'] : '';
	$description = isset($_POST['description']) ? $_POST['description'] : '';
	if ($_FILES["attachment"]["name"] != '' ) {
	      $pathToUpload = '/assets/category/shayar/';
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

		$sql = "INSERT INTO shayar_details (firstName, lastName, email,mobile, gender, cat_type, description, youtube_url, file_url, ext	) VALUES ('".$firstName."','".$lastName."','".$email."','".$mobile."','".$gender."','".$cat_type."','".$description."','".$youtube_url."','".$file_url."','".$ext."')";
		if(mysqli_query($conn, $sql)){
		    $successMsg = "Thank You ! successfully register.";
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

<div class="homepage-next-events">
	<div class="container">
		<div class="row">
			<div class="next-events-section-header">
				<h2 class="entry-title">We offer</h2>
				<p>SUMAAR STAGE PROVIDE STAGE TO DISERVING ARTIST.
LET’S TEL US WHO YOU ARE?</p>
			</div>
		</div>
	</div>
</div>		
<div class="homepage-info-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-4">
				<figure class="catdetail_img">
					<img src="<?=$cat_url ?>" alt="Singer">
				</figure>
			</div>
			<div class="col-12 col-md-8 col-lg-7">
				<header class="entry-header">
					<h2 class="entry-title"><?=$cat_name?></h2>
				</header>
				<div class="entry-content">
					<p><?=$cat_detail?></p>
					<p>If you feel words and able to express your words in front of camera than we are here to present your voice in your words to the world through our Gujarat’s first digital platform for writer’s like shayar, poet, storyteller and stand-up comedian.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="homepage-next-events writers3">
	<div class="container">
		<div class="row">
			<div class="next-events-section-header">
				<h2 class="entry-title">PRESENT YOUR VOICE IN YOUR WRITTEN WORDS TO THE WORLD</h2>
				<p>Join Gujarat’s biggest open mic Sumaar stage and get a chance to make your professional video.</p>
				<p><b>WE RECORD YOUR VOICE PROFFESTIONALY,</b></p>
				<p><b>WE SHOOT YOUR VIDEO PROFESTIONAL,</b></p>
				<p><b>WE VIRAL YOUR VIDEO DIGITALY </b></p>
				<p><b>FOR FREE</b></p>
			</div>
		</div>
	</div>
</div>

<div class="homepage-info-section writers4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12 headerh2">
				<h2 class="entry-title text-center" >HOW TO JOIN </h2>
			</div>
			<div class="col-12 col-md-12 col-lg-12">
				<div class="entry-header">
					<h2 class="entry-title">Take The first two steps towards stardom</h2>
				</div>
				<div class="entry-content">
					<?php if(isset($cms_arr['writerS3-step1'])) echo $cms_arr['writerS3-step1']['c_desc']; ?>

				</div>
			</div>

		<div class="col-12 col-md-12 col-lg-12">
			<div class="entry-header">
				<h2 class="entry-title">Guidelines for the SUMAAR STAGE OPEN MIC</h2>
			</div>
			<div class="col-12 col-md-12 col-lg-12">
				
				<?php if(isset($cms_arr['writerS3-step2'])) echo $cms_arr['writerS3-step2']['c_desc']; ?>
				
			</div>
		</div>

		<div class="col-12 col-md-12 col-lg-12">
			<div class="entry-header">
				<h2 class="entry-title">Terms & Conditions</h2>
			</div>
			<div class="col-12 col-md-12 col-lg-12">
				<?php if(isset($cms_arr['writerS3-step3'])) echo $cms_arr['writerS3-step3']['c_desc']; ?>				
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
					<form class="justify-content-center align-items-center" id="form_submit" class="registerform" method="post" enctype="multipart/form-data">
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label><?=$label['lbl_first_name']?> <span>*</span></label>
				      <input type="text" name="firstName" class="form-control" id="firstName" placeholder="<?=$label['lbl_first_name']?>" required="required">
				    </div>
				  </div>

				    <div class="form-row">
					    <div class="form-group col-md-12">
					      <label><?=$label['lbl_last_name']?> <span>*</span></label>
					      <input type="text" name="lastName" class="form-control" id="lastName" placeholder="<?=$label['lbl_last_name']?>" required="required">
					    </div>
				    </div>
				      
				    <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for=""><?=$label['lbl_email']?> <span>*</span></label>
						      <input type="email" name="email"  class="form-control" placeholder="<?=$label['lbl_email']?>">
						  </div>
					  </div>
					  <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for=""><?=$label['lbl_mobile']?> <span>*</span></label>
						      <input type="text" name="mobile" class="form-control" placeholder="<?=$label['lbl_mobile']?>" required="required">
						  </div>
					  </div>

					  <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for=""><?=$label['lbl_gender']?> <span>*</span></label>
						      <select class="" required="required" style="color:black;">
						     		<option value="0"><?=$label['lbl_select_gender']?></option>
										<option value="Male" selected="select"><?=$label['lbl_male']?></option>
										<option value="Female"><?=$label['lbl_female']?></option>
										<option value="Other"><?=$label['lbl_other']?></option>
									</select>
						  </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-12">
							<label for=""><?=$label['lbl_category']?></label>
							<select name="cat_type" required="required">
									<option value="0"><?=$label['lbl_select_category']?></option>
									<option value="Writer"><?=$label['lbl_writer']?></option>
									<option value="Poet"><?=$label['lbl_poet']?></option>
									<option value="Other"><?=$label['lbl_other']?></option>
								</select>
						  </div>
						</div>
					    
				  		<div class="form-row">
						    <div class="form-group col-md-7">
						      <label for=""><?=$label['lbl_attachment']?> <span>*</span></label>
						      <input type="file" name="attachment" required="required" class="custom-file-input">
									<p><?=$label['lbl_audio_video_accept']?></p>
						  </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-12">
						    <label for=""><?=$label['lbl_youtebe_url']?></label>
						    <input type="text" name="youtube_url" class="form-control" placeholder="<?=$label['lbl_youtebe_url']?>">
						  </div>
					  </div>
					  <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for=""><?=$label['lbl_detail']?> <span>*</span></label>
						      <textarea name="description" placeholder="<?=$label['lbl_detail']?>" id="" class="col-md-12" required="required"></textarea>
						  </div>
					  </div>
					  <div class="form-row">
						    <div class="form-group col-md-12">
						      
						  </div>
					  </div>
					  <div class="form-row">
						    <div class="form-group col-md-6">
		      				<input class="btn gradient-bg formbtnleft marginCls" type="submit" value="<?=$label['lbl_register']?>" id="register" name="register">
						  </div>
					  </div>
				  

				</form>

				</div>

			</div>
		</div>
	</div>
</div>

<div class="homepage-next-events eventsDetail">
	<div class="container">
		<div class="row">
			<div class="next-events-section-header">
				<h2 class="entry-title">Events</h2>

			</div>
		</div>
		<div class="row">
			<?php while($row = mysqli_fetch_array($res_evnt)){
			 	
			 ?>
			<div class="col-12 col-sm-6 col-md-3">
				<div class="next-event-wrap">
					<figure>
						<a href="#"><img src="<?php echo $row['image']; ?>" alt="singer" class="catimg"></a>
					</figure>
					<header class="entry-header">
						<h3 class="entry-title"><?php echo $row['event_name']; ?></h3>
						<div class="posted-date"><?php echo $row['city']; ?> : <span><?php echo globalDateformat($row['event_date']); ?></span></div>
					</header>
					<!-- <header class="entry-header">
						<div class="posted-date"><?php //echo $row['city']; ?>, <p><?php //echo $row['location']; ?></p></div>
						<p class=""></p>
						
					</header> -->
					<div class="entry-content">
						<p><?php echo $row['location']; ?></p>
					</div>
					<!-- <footer class="entry-footer">
						<p><?php //echo $row['location']; ?></p>
					</footer> -->
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

<?php include('portfolio.php'); ?>


<?php include('footer.php'); ?>

<script type="text/javascript">
	
	jQuery(function(){
	var validator=$("#form_submit").validate({
      
      rules: {
          mobile: {
              minlength:10,
              maxlength:12,
              required:true,
              remote: {
                  url:"<?php base_url(); ?>isMobileAvailable",
                  type:'post',
                  data: { id: 0 },
                }
          }
      },
      messages: {
          mobile: {
              mobile: "Please enter a valid mobile no.",
              remote:"Mobile number is already in use."
          }
      }
  });
});

$(document).ready(function(){
   $("#register").click(function(e){
   	jQuery.noConflict();
			console.log('heloo');
			alert('hi');      
      var firstName = $('#firstName').val().trim();
      var lasttName = $('#lastName').val().trim();
      if(firstName != ''){
         $.ajax({
            url: "<?php //base_url(); ?>register.php",
            type: 'post',
            data: {firstName: firstName,lasttName: lasttName},
            success: function(response){
                $('#check_mobile').html(response);
                e.preventDefault();
             }
         });
      }else{
         $("#check_mobile").html("");
      }
    });
 });

console.log('test');

setTimeout(function() {
    // $('#ghdiv').fadeOut('fast');
    console.log('working');
}, 1000); // <-- time in milliseconds

//
</script>

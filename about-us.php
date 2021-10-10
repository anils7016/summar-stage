<?php include('header.php'); 

$res = mysqli_query($conn,"SELECT * FROM category");
?>

<header class="site-header">

<?php include('header-menu.php'); ?>
	<div class="swiper-container hero-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide bgheight" data-date="2018/05/01" style="background:url(images/header-bg.jpg) no-repeat;" >
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
			<div class="next-events-section-header abtanm1">
				<h2 class="entry-title" data-animation="animated fadeInLeft">WHO WE ARE?</h2>
				<p class="animate__animated animate__bounce">
				<?php if(isset($cms_arr['aboutS1'])) echo $cms_arr['aboutS1']['c_desc']; ?>
				</p>

			</div>
		</div>
	</div>
</div>


<div class="homepage-next-events about-dv2">
	<div class="container">
		<div class="row">
			<div class="next-events-section-header abtanm2">
				<h2 class="entry-title">Why we are starting SUMAAR STAGE?</h2>
				<div class="animate__animated animate__bounce">
				<?php if(isset($cms_arr['aboutS2'])) echo $cms_arr['aboutS2']['c_desc']; ?>
				</div>


			</div>
		</div>
	</div>
</div>

<div class="homepage-info-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-5">
				<figure>
					<img src="images/about.jpeg" alt="logo">
				</figure>
			</div>
			<div class="col-12 col-md-8 col-lg-7">
				<header class="entry-header">
					<h2 class="entry-title">About Us</h2>
				</header>
				<div class="entry-content abtanm3">
					<?php if(isset($cms_arr['about_us'])) echo $cms_arr['about_us']['c_desc']; ?>
					
				</div>
				<footer class="entry-footer">
					
					<!-- <a href="#" class="btn dark">Register Now</a> -->
				</footer>
			</div>
		</div>
	</div>
</div>

<?php include('category.php');  ?>

<?php include('portfolio.php'); ?>

<?php include('footer.php'); ?>
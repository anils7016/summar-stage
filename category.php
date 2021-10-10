<div class="homepage-next-events homecat">
	<div class="container">
		<div class="row">
			<div class="next-events-section-header">
				<h2 class="entry-title">We offer</h2>
				<p>SUMAAR STAGE PROVIDE STAGE TO DISERVING ARTIST.
LET’S TEL US WHO YOU ARE? </p>
			</div>
		</div>
		<div class="row">
			<?php 
			 $index = 0;
			  while($row = mysqli_fetch_array($res)){
			 	$page_url = $row['url_slug'] ? $row['url_slug'] : 'singer';
			 ?>
			<div class="col-12 col-sm-6 col-md-3">
				<div class="next-event-wrap content">
					<figure class="">
						
						<a href="<?= $page_url ?>"><img src="<?php echo $row['icon']; ?>" alt="singer" class="catimg"></a>
						
						<div class="content-overlay"></div>
							
			<div class="content-details fadeIn-bottom">
			        <?php if($index==0){ ?>
			        <p class="content-text">COMPETE WITH GUJARAT'S BEST UPCOMING SINGERS. AND GET A CHANCE TO MAKE YOUR MUSIC ALBUM FOR FREE.
			        	<br><footer class="entry-footer">
							<a href="<?= $page_url ?>" class="btn gradient-bg registerbtn"><?=_lbl_register?></a>
						</footer></p>

			        <h3 class="content-title"></h3>
			       <?php } ?>
			       <?php if($index==1){ ?>
			        <p class="content-text">JOIN OUR OPEN MIC CLUBS AND GET A CHANCE TO MAKE YOUR PROFESSIONAL SHAYARI, STORYTELLING VIDEO.
			        	<br><footer class="entry-footer">
							<a href="<?= $page_url ?>" class="btn gradient-bg registerbtn"><?=_lbl_register?></a>
						</footer></p>
			        <h3 class="content-title"></h3>
			       <?php } ?>
			       <?php if($index==2){ ?>
			        <p class="content-text">JOIN OUR PRODUCTION HOUSE AND BOOST YOUR ACTING CAREER FOR FREE.</p>
			        <p>JOIN OUR PRODUCTION HOUSE AND GRAB THE OPPORTUNITY TO WORK ON MUSIC ALBUMS, ADS & SHORT FILMS ETC.
			        	<br><footer class="entry-footer">
							<a href="<?= $page_url ?>" class="btn gradient-bg registerbtn"><?=_lbl_register?></a>
						</footer></p>
			        <h3 class="content-title"></h3>
			       <?php } ?>
			       <?php if($index==3){ ?>
			        <p class="content-text">EXPLORE YOUR CINEMATIC TALENT WITH THE SUMAAR STAGE.
			        	<br><footer class="entry-footer">
							<a href="<?= $page_url ?>" class="btn gradient-bg registerbtn"><?=_lbl_register?></a>
						</footer></p>
			        <h3 class="content-title"></h3>
			       <?php } 
			       $index++;
			       ?>
			   </div>
		        
					</figure>
					<header class="entry-header">
						<h3 class="category entry-title"><?php echo $row['name']; ?></h3>
						<!-- <div class="posted-date">Saturday <span>Jan 27, 2018</span></div> -->
					</header>
					<!-- <div class="entry-content">
						<p><?php echo $row[$langName.'detail']; ?></p>
					</div> -->
					<footer class="entry-footer">
						<a href="<?= $page_url ?>" class="btn gradient-bg registerbtn"><?=_lbl_register?></a>
					</footer>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>


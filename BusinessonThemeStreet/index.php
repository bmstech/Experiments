<?php get_header(); ?>
<?php $homepageoptions = get_option('sample_theme_options'); ?>
<?php $serviceoptions = get_option('service_theme_options'); ?>	
<div class="center">
	<div class="home-slider">
		<div class="slider-bank">
			<div class="default-slider">
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide-img.jpg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/main-slider.jpg"></li>
				</ul>
				<div class="guttersnipe"></div>
				<div class="guttersnipe"></div>
				<div class="guttersnipe"></div>
				<div class="guttersnipe"></div>
				<div class="guttersnipe"></div>
			</div>
			<div class="slide-div slide-1-div">
				<a href="<?php echo $serviceoptions['randplink']; ?>">
					<img id="active-1" name="slide1" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-1-active.jpg" onMouseOver="slide1.src='<?php echo get_template_directory_uri(); ?>/images/slide-1-hover.jpg'" onMouseOut="slide1.src='<?php echo get_template_directory_uri(); ?>/images/slide-1-active.jpg'">
				</a>
			</div>
			<div class="slide-div slide-2-div">
				<a href="<?php echo $serviceoptions['brandinglink']; ?>">
					<img id="active-2" name="slide2" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-2-active.jpg" onMouseOver="slide2.src='<?php echo get_template_directory_uri(); ?>/images/slide-2-hover.jpg'" onMouseOut="slide2.src='<?php echo get_template_directory_uri(); ?>/images/slide-2-active.jpg'">
				</a>
			</div>
			<div class="slide-div slide-3-div">
				<a href="<?php echo $serviceoptions['webdevlink']; ?>">
					<img id="active-3" name="slide3" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-3-active.jpg" onMouseOver="slide3.src='<?php echo get_template_directory_uri(); ?>/images/slide-3-hover.jpg'" onMouseOut="slide3.src='<?php echo get_template_directory_uri(); ?>/images/slide-3-active.jpg'">
				</a>
			</div>
			<div class="slide-div slide-4-div">
				<a href="<?php echo $serviceoptions['bdlink']; ?>">
					<img id="active-4" name="slide4" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-4-active.jpg" onMouseOver="slide4.src='<?php echo get_template_directory_uri(); ?>/images/slide-4-hover.jpg'" onMouseOut="slide4.src='<?php echo get_template_directory_uri(); ?>/images/slide-4-active.jpg'">
				</a>
			</div>
			<div class="slide-div slide-5-div">
				<a href="<?php echo $serviceoptions['marketinglink']; ?>">
					<img id="active-5" name="slide5" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-5-active.jpg" onMouseOver="slide5.src='<?php echo get_template_directory_uri(); ?>/images/slide-5-hover.jpg'" onMouseOut="slide5.src='<?php echo get_template_directory_uri(); ?>/images/slide-5-active.jpg'">
				</a>
			</div>
			<div class ="contact-page-slide">
				<div class="contact-slide">
					<div class="contact-slide-slogan"></div>
					<form method="POST" action="<?php echo get_template_directory_uri(); ?>/contactslideform.php">
						<input name="nameslider" placeholder="name*" type="text"><br>
						<input name="emailslider" placeholder="email*" type="text"><br>
						<input name="phoneslider" placeholder="phone" type="text"><br>
						<input name="industryslider" placeholder="industry" type="text"><br>
						<textarea placeholder="message" name="messageslider"></textarea>
						<input name="randp" value="no" type="hidden">
						<input name="branding" value="no" type="hidden">
						<input name="bisdev" value="no" type="hidden">
						<input name="webdev" value="no" type="hidden">
						<input name="marketing" value="no" type="hidden">
						<input id="contact-form-submit" type="submit" value="submit">
					</form>
					<div class="contact-slide-select">
						<h1>Select all that apply</h1>
						<ul>
							<li class="contact-slide-select-1"><p>Research and<br>planning</p></li>
							<li class="contact-slide-select-3"><p>Branding</p></li>
							<li class="contact-slide-select-2"><p>Business<br>development</p></li>
							<li class="contact-slide-select-5"><p>Web<br>development</p></li>
							<li class="contact-slide-select-4"><p>Marketing</p></li>														
						</ul>
					</div>
					<div class="contact-slide-address">
						<h1>BMS<br>CONTACT</h1>
						<ul>
							<li>7975</li>
							<li>Raytheon RD Suite 310</li>
							<li>San Diego, CA 92115</li><br>
							<li>P // 858.598.5477</li>
						</ul>	
					</div>
					<div class="clear"></div>
				</div><!--END CONTACT SLIDE -->
			</div>
		</div>
		<div class="slider-ui">
			<div id="activator-1" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-1.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-1-active.png" class="tab-hovers tab-hovers-first">
			</div>
			<div id="activator-2" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-2.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-2-active.png" class="tab-hovers">
			</div>
			<div id="activator-3" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-3.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-3-active.png" class="tab-hovers">
			</div>
			<div id="activator-4" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-4.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-4-active.png" class="tab-hovers">
			</div>
			<div id="activator-5" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-5.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-5-active.png" class="tab-hovers">
			</div>
			<div id="activator-6" class="slide-overlay" onMouseOver="contacttab.src='<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-6-active.png'" onMouseOut="contacttab.src='<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-6.png'">
				<img class="contact tab-img" name="contacttab" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-6.png">
			</div>
		</div>
	</div>
	<div class="home-content bottom-page-space">
		<?php 
		$options = get_option('sample_theme_options');
		if ($options['casestudies'] == '1') {
			?>
			<h1><em>Recent</em> Projects</h1>
			<section class="home-project-section">
				<div class="home-project-wrapper">
					<?php
					$counter = 0;
					$featuredPosts = new WP_Query();
					$featuredPosts->query(array('post_type' => 'Casestudies', 'posts_per_page' => 12));
					while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
					?>
					<?php if ($counter % 4 == 0) { ?>
					<div class="home-project-block">
						<?php } ?>
						<article class="home-project">
							<img class="z-set" src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
							<div class="home-project-thumbnailimage">
								<?php the_post_thumbnail(); ?> 
							</div>
							
							<h2><?php the_title(); ?> <em>//</em></h2>
							<h1><?php
							$category = get_the_category();
							$countercat = count($category);
							$randomentry = rand(0,$countercat-1);
							echo $category[$randomentry]->cat_name;
							?></h1>
							
							<div class="home-project-hover"><a href="<?php the_permalink(); ?>" class="home-project-hover-link">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<img class="z-set" src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<div class="icon-group-hover">
								<?php if(get_post_meta(get_the_ID(), 'brandingbox', true) == true) { ?>
								<div class="branding-nocolor"></div>
								<?php } ?>
								<?php if(get_post_meta(get_the_ID(), 'marketingbox', true) == true) { ?>
								<div class="marketing-nocolor"></div>
								<?php } ?>
								<?php if(get_post_meta(get_the_ID(), 'developmentbox', true) == true) { ?>
								<div class="bd-nocolor"></div>
								<?php } ?>
								<?php if(get_post_meta(get_the_ID(), 'technologybox', true) == true) { ?>
								<div class="technology-nocolor"></div>
								<?php } ?>
								</div>

								<?php echo get_the_category_list(); ?>
<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button2.png" class="submitbuttonthing"></a>
							</a></div>
							
						</article>
						<?php $counter++; ?>
						<?php if ($counter % 4 == 0) { ?>
						<div class="clear"></div>
					</div>
					<?php } ?>
				<?php endwhile; ?>
				<div class="clear"></div>
			</div>
		</section>
		<div class="home-project-control">
			<p class="project-control-left"></p>
			<p class="project-control-right"></p>
			<div class="clear"></div>
		</div>
		<?php } ?>

		<div class="home-bottom-info">
			<h1><?php echo $homepageoptions['hp-content-title']; ?></h1>
			<p><?php echo $homepageoptions['hp-content']; ?></p>					
			<ul>
				<li>
					<a href="<?php echo $serviceoptions['randplink']; ?>">
						<div class="randp-color"></div>
						<div class="stackedtext">
						Research &amp; <br />
						Planning
						</div>
					</a>
				</li>
				<li>
					<a href="<?php echo $serviceoptions['bdlink']; ?>">
						<div class="bd-color"></div>
						<div class="stackedtext">
						Business <br />
						Development
						</div>
					</a>
				</li>
				<li>
					<a href="<?php echo $serviceoptions['brandinglink']; ?>">
						<div class="branding-color"></div>
						Branding
					</a>
				</li>
				<li>
					<a href="<?php echo $serviceoptions['marketinglink']; ?>">
						<div class="market-color"></div>
						Marketing
					</a>
				</li>
				<li>
					<a href="<?php echo $serviceoptions['webdevlink']; ?>">
						<div class="tech-color"></div>
						<div class="stackedtext">
						Web <br />
						Development
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>			
	<div class="bms-talk home-sidebar">
		<?php get_template_part('page','sidebar'); ?>			
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?> 
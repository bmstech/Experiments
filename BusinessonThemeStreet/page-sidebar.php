<div class="bms-talk home-sidebar">
	<h1><em>BMS</em> Talk</h1>
	<ul>
		<?php query_posts('posts_per_page=3'); ?>
		<?php while (have_posts()) : the_post(); ?>
		<li><div class="bms-logo-small"></div><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>>></span></p></li>
	<?php endwhile; ?>
</ul>
<div class="home-sidebar-contact">
	<h1><em>Intrigued</em>?</h1>
	<form method="POST" action="<?php email_form(); ?>">
		<input type="text" placeholder="first name" value="" name="firstname">
		<input type="text" placeholder="last name" value="" name="lastname">
		<input type="text" placeholder="email" value="" name="email">
		<input type="phone" placeholder="phone" value="" name="phone">
		<input id="home-sidebar-contact-submit" type="submit" value="submit">
	</form>
</div>				
</div>
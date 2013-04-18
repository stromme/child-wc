<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * .container div element.
 *
 * @package Hatch
 * @subpackage 
 * @since 
 */
?>
	<section class="footer bg-slate-invert" itemprop="member" itemscope="http://schema.org/Organization">
		<img src="<?php echo THEME_IMAGES; ?>brand/window-cleaning-dot-com-logo.png" itemscope="http://schema.org/Brand" itemprop="image">
		<h3 class="bumper-bottom bumper-top">Like to chat? Call our team anytime at <?=get_phone_number()?> or <a href="" class="quick-estimate">get an online estimate.</a></h3>
		<p class="footer-links"><a href="http://www.windowcleaning.com" rel="nofollow">Visit <span itemprop="name">WindowCleaning.com</span></a><a href="http://www.windowcleaning.com/locations" rel="nofollow">Our Locations</a><a href="http://www.windowcleaning.com/news" rel="nofollow">News About Us</a><a href="http://www.windowcleaning.com/members">Apply for Membership</a></p>
		<p><small><span itemprop="description">North America's Best Window Cleaners</span> | Copyright 2013 | <a href="">Privacy</a> | <a href="">Terms</a></small></p>
	</section>

</div><!-- / .container -->
<? get_template_part('templates/modal', 'review'); ?>
<? get_template_part('templates/modal', 'lead'); ?>
<?php wp_footer(); ?>
</body>
</html>
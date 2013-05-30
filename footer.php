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
		<img src="<?php echo THEME_IMAGES; ?>brand/window-cleaning-dot-com-logo.png" itemprop="logo">
		<h3 class="bumper-bottom bumper-top">Like to chat? Call our team anytime at <?=get_phone_number()?> or <a href="" class="quick-estimate">get an online estimate.</a></h3>
		<p class="footer-links"><a href="<?=get_site_url(1)?>" rel="nofollow" itemprop="name">WindowCleaning.com</a><a href="<?=get_site_url(1)?>/locations" rel="nofollow">Our Locations</a><a href="<?=get_site_url(1)?>/news" rel="nofollow">News About Us</a><a href="<?=get_site_url(1)?>/members">Apply for Membership</a></p>
		<p><small><span itemprop="description">North America's Best Window Cleaners</span> | Copyright 2013 | <a href="<?=get_site_url(1)?>/privacy">Privacy</a> | <a href="<?=get_site_url(1)?>/terms">Terms</a></small></p>
    <?php
      $social_media = get_social_media_link();
      if($social_media){
    ?>
    <p class="footer-social">
      <?php if($social_media['twitter']!=''){ ?><a href="<?=$social_media['twitter']?>" title="<?=$social_media['twitter']?>"><i class="icon-twitter"></i></a><?php } ?>
      <?php if($social_media['facebook']!=''){ ?><a href="<?=$social_media['facebook']?>" title="<?=$social_media['facebook']?>"><i class="icon-facebook"></i></a><?php } ?>
      <?php if($social_media['googleplus']!=''){ ?><a href="<?=$social_media['googleplus']?>" title="<?=$social_media['googleplus']?>"><i class="icon-googleplus"></i></a><?php } ?>
    </p>
    <?php } ?>
	</section>

</div><!-- / .container -->
<? get_template_part('templates/modal', 'review'); ?>
<? get_template_part('templates/modal', 'lead'); ?>
<?php wp_footer(); ?>
</body>
</html>
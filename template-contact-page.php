<?php
/**
 * Template Name: Contact Page
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @package   SwishDesign
 * @version   1.0.0
 */

/**
 * No direct access to this file.
 *
 * @since 1.0.0
 */
defined( 'ABSPATH' ) || die();

$contact_address = qed_get_option( 'contact_address', 'option' );
$contact_mail = qed_get_option( 'contact_mail', 'option' );
$contact_phone = qed_get_option( 'contact_phone', 'option' );
$contact_email = qed_get_option( 'contact_email', 'option' );
$contact_skype = qed_get_option( 'contact_skype', 'option' );

get_header();

?>

<?php
if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<div class="page-contact container-fluid">
			<div class="row">
				<div class="col-md-8 bg-black">
					<div class="container">
						<div class="row">
							<div class="col-md-12"><?php echo do_shortcode('[contact-form-7 id="bb8d043" title="Contact Page Contact Form"]'); ?></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 g-map">
					<div class="g-map-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.2140931226622!2d123.90595387543335!3d10.324744267361856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999397e460d0b%3A0x1146ab710ba707d6!2sMN%20Law%20Firm!5e0!3m2!1sen!2sph!4v1695632335880!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>

			<div class="container contact-deets">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-deets-icon"><div><i class="fa-solid fa-location-dot"></i></div></div>
						<div class="contact-deets-content"><?php echo $contact_address; ?></div>
					</div>
					<div class="col-md-4">
						<div class="contact-deets-icon"><div><i class="fa-solid fa-at"></i></div></div>
						<div class="contact-deets-content"><a href="mailto:<?php echo $contact_email; ?> "><?php echo $contact_email; ?></a></div>
					</div>
					<div class="col-md-4">
						<div class="contact-deets-icon"><div><i class="fa-solid fa-phone"></i></div></div>
						<div class="contact-deets-content"><a href="tel:<?php echo $contact_email; ?> "><?php echo $contact_phone; ?></a></div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

		<script>
			var $ = jQuery;

			$(document).ready(function(){
				$('.wpcf7-select').selectpicker({
					style: 'btn-info'  
				});
			});
		</script>
	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();

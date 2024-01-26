<?php
/**
 * Footer template part.
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @package Eyorsogood_Design
 * @version   1.0.0
 */

$is_back_to_top = qed_get_option( 'back-to-top', 'option' );
do_action('eyor_after_main_content');

$contact_fb = qed_get_option( 'contact_fb', 'option' );
$contact_phone = qed_get_option( 'contact_phone', 'option' );
$contact_email = qed_get_option( 'contact_email', 'option' );


?>
<footer class="footer">
	<?php get_template_part( 'templates/footer/widget-areas' ); ?>
	<div class="footer__bottom">
		<?php
		if ( $is_back_to_top ) {
			echo '<div class="footer__arrow-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>';
		}
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer__logo"><?php get_template_part( 'templates/header/logo' ); ?></div>
					<div class="footer__icons">
						<div class="footer__icons-container">
							<?php if ( null !== $contact_fb ) : ?>
								<div class="footer__icons-item">
									<a href="<?php echo $contact_fb; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
								</div>
							<?php endif; ?>

							<?php if ( null !== $contact_email ) : ?>
								<div class="footer__icons-item">
									<a href="mailto:<?php echo $contact_email; ?>" target="_blank"><i class="fa-solid fa-envelope"></i></a>
								</div>
							<?php endif; ?>

							<?php if ( null !== $contact_phone ) : ?>
								<div class="footer__icons-item">
									<a href="tel:<?php echo $contact_phone; ?>" target="_blank"><i class="fa-solid fa-phone"></i></a>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="footer__copyright"><?php echo qed_esc_text( qed_get_option( 'footer_text_note', 'option', 'MN LAW © All Rights Reserved '.date('Y') ), 'option_input', true ); ?></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<input type="hidden" id="base-url" value="<?php echo home_url(); ?>">
<input type="hidden" id="ajax-url" value="<?php echo admin_url('admin-ajax.php'); ?>">

<?php
get_template_part( 'templates/footer/footer', 'clean' );

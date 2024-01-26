<?php
/**
 * Header clean template part.
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @version   1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php
	if ( ! qed_check( 'is_wordpress_seo_in_use' ) ) {
		printf( '<meta name="description" content="%s">', get_bloginfo( 'description', 'display' ) );
	}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php acf_form_head(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
$logourl = esc_url( qed_get_option( 'logo_image', 'option' ) );
$contact_fb = qed_get_option( 'contact_fb', 'option' );
$contact_phone = qed_get_option( 'contact_phone', 'option' );
$contact_email = qed_get_option( 'contact_email', 'option' );
$contact_about = qed_get_option( 'contact_about', 'option' );
$contact_address = qed_get_option( 'contact_address', 'option' );
?>

<div class="drawer__container">
	<div class="drawer__inner">
		<div class="drawer__close"><a href="#" class="close-btn"><i class="fa-solid fa-xmark"></i></a></div>
		<div class="drawer__logo"><img src="<?php echo $logourl; ?>"></div>
		<div class="drawer__logo-name">MN LAW</div>
		<div class="drawer__about"><?php echo $contact_about; ?></div>
		<div class="drawer__social"><a href="<?php echo $contact_fb; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></div>
		<h3>OUR CONTACTS</h3>
		<div class="drawer__contact"><div class="soccont"><i class="fa-solid fa-location-dot"></i></div> <span><?php echo $contact_address; ?></span></div>
		<div class="drawer__contact"><div class="soccont"><i class="fa-solid fa-envelope"></i></div> <span><?php echo $contact_email; ?></span></div>
		<div class="drawer__contact"><div class="soccont"><i class="fa-solid fa-phone"></i></div> <span><?php echo $contact_phone; ?></span></div>
	</div>
</div>
<div class="layout-content">
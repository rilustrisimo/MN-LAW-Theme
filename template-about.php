<?php
/**
 * Template Name: About Us
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @version   1.0.0
 */

/**
 * No direct access to this file.
 *
 * @since 1.0.0
 */
defined( 'ABSPATH' ) || die();

get_header();

$fields = get_fields(get_the_ID());

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<div class="container mission-vision">
            <div class="row">
                <div class="col-md-6">
                    <h2>OUR VISION</h2>
                    <?php echo $fields['our_vision']; ?>
                </div>
                <div class="col-md-6">
                    <h2>OUR MISSION</h2>
                    <?php echo $fields['our_mission']; ?>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="container-fluid about-main" style="background-image: url(<?php echo $fields['background_image']['url']; ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>ABOUT US</h1>
                        <?php echo $fields['about_us']; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid gallery" style="background-image: url(<?php echo $fields['background_image']['url']; ?>)">
            <div class="row">
                <?php foreach($fields['gallery_images'] as $i): ?>
                <div class="col-md-3 images-cont" style="background-image: url(<?php echo $i['url']; ?>)">
                    
                </div>
                <?php endforeach; ?>
            </div>
        </div>
	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();

<?php
/**
 * Template Name: Homepage
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

$practice = get_field('practice_areas', get_the_ID());
$aboutus = get_field('about_us', get_the_ID());
$team = get_field('lawyers', get_the_ID());
$contact = get_field('contact', get_the_ID());
$theme = new Theme();

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<div class="page-single">
			<main class="page-single__content" role="main">
				<section id="practice" class="section prac">
					<h1><?php echo $practice['section_title']; ?></h1>
					<h2><?php echo $practice['section_subtitle']; ?></h2>

					<?php
						$items = $practice['section_items'];
					?>

					<div class="container prac__items">
						<div class="row slick-items">
							<?php foreach($items as $i): ?>
							<div class="col-md-4 prac__item">
								<div class="prac__item-container">
									<div class="prac__item-icon">
										<div class="prac__item-icon-container"><img src="<?php echo $i['icon']['url']; ?>" class="prac__item-icon-img"></div>
									</div>
									<div class="prac__item-title"><?php echo $i['title']; ?></div>
									<div class="prac__item-description"><?php echo $i['description']; ?></div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</section>


				<section id="about" class="section about" style="background-image:url(<?php echo $aboutus['background']['url']; ?>);">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mobile-center">
								<div class="about__container">
									<h1><?php echo $aboutus['title']; ?></h1>
									<p><?php echo $aboutus['description']; ?></p>
									<div class="about__button">
										<a href="<?php echo $aboutus['button_link']; ?>" target="_blank" class="btn button"><?php echo $aboutus['button_text']; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section id="team" class="section team">
					<h1><?php echo $team['title']; ?></h1>
					<?php
						$lawyers = $theme->createQuery('lawyers', array(), -1, 'date', 'ASC');
						$items = $lawyers->posts;
						
					?>

					<div class="container">
						<div class="row slick-items-lawyer">
							<?php 
								foreach($items as $it): 

									$i = get_fields($it->ID);
							?>
							<div class="col-md-4 team__item">
								<a href="<?php echo get_permalink($it->ID); ?>">
								<div class="team__item-container">
									<div class="team__item-image">
										<div class="team__item-image-container"><img src="<?php echo $i['image']['url']; ?>" class="team__item-image-img"></div>
									</div>
									<div class="team__item-title"><?php echo $i['name']; ?></div>
									<div class="team__item-description"><div><?php echo wp_trim_words($i['description'], 50, '... <u>read more</u>'); ?></div></div>
								</div>
								</a>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</section>

				<section id="contact" class="section contact" style="background-image:url(<?php echo $contact['background']['url']; ?>);">
					<div class="container">
						<h3><?php echo $contact['title']; ?></h3>
						<h4><?php echo $contact['subtitle']; ?></h4>
						<div class="contact__form">
							<?php echo do_shortcode($contact['contact_shortcode']); ?>
						</div>
					</div>
				</section>
			</main>
		</div>
	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();

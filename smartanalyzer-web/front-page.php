<?php
/**
 * Placeholder front page for the Smartanalyzer site.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<main>
	<section class="wrap">
		<p class="eyebrow">Site 2</p>
		<h1>Smartanalyzer</h1>
		<p>This is a placeholder homepage. The Smartanalyzer landing page will replace it.</p>
	</section>
</main>

<?php wp_footer(); ?>
</body>
</html>

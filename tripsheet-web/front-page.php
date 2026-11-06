<?php
/**
 * Front page: driver introduction to the Sadiquna trip logbook.
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

<header class="site-header">
	<div class="wrap">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Sadiquna</a>
		<a class="nav-link" href="https://sadiquna.com">Open the app</a>
	</div>
</header>

<main>
	<section class="hero">
		<div class="wrap">
			<p class="eyebrow">For drivers</p>
			<h1>Your trip sheet, kept in one place.</h1>
			<p class="lede">Sadiquna is a digital trip logbook. Record the day’s trips, kilometers, duty, and handover notes instead of keeping them on paper.</p>
			<div class="actions">
				<a class="button button-primary" href="https://sadiquna.com">Sign in</a>
				<a class="button button-secondary" href="mailto:info@sadiquna.com">Ask for access</a>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="wrap">
			<h2>Who it is for</h2>
			<p class="section-intro">Drivers who need a trip sheet for the work they already do: where they went, how far, when they were on duty, and what to hand over at the end of the shift.</p>
		</div>
	</section>

	<section class="section">
		<div class="wrap">
			<h2>What the logbook is for</h2>
			<ul class="cards">
				<li class="card">
					<h3>Daily trips</h3>
					<p>Keep each trip from the day in the logbook so the sheet is ready when the shift ends.</p>
				</li>
				<li class="card">
					<h3>Kilometers</h3>
					<p>Note the distance for the trips you run, in place of a paper tally.</p>
				</li>
				<li class="card">
					<h3>Duty</h3>
					<p>Record the duty that belongs with the day’s trips.</p>
				</li>
				<li class="card">
					<h3>Handover notes</h3>
					<p>Leave a short note for the next driver or the office when you hand the vehicle over.</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="section">
		<div class="wrap">
			<h2>How to start</h2>
			<ol class="steps">
				<li><span>An administrator creates your driver account. You do not sign yourself up.</span></li>
				<li><span>Open <a href="https://sadiquna.com">sadiquna.com</a> on your phone.</span></li>
				<li><span>Sign in with your username or mobile number and your password.</span></li>
			</ol>
		</div>
	</section>

	<section class="section">
		<div class="wrap">
			<h2>Need access or help?</h2>
			<div class="help">
				<p>New driver accounts are created by an administrator. If you need an account, a password reset, or help signing in, write to <a href="mailto:info@sadiquna.com">info@sadiquna.com</a>.</p>
			</div>
		</div>
	</section>
</main>

<footer class="site-footer">
	<div class="wrap">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Sadiquna</p>
		<p><a href="mailto:info@sadiquna.com">info@sadiquna.com</a></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

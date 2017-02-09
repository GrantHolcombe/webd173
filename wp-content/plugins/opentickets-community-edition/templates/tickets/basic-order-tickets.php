<?php if ( __FILE__ == $_SERVER['SCRIPT_FILENAME'] ) die( header( 'Location: /') );
/*
 * Template Name: _Default
 */

$venues = array();

?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php echo ( $pdf ) ? 'class="pdf"' : '' ?>>
	<head>
		<title><?php echo $page_title ?></title>
		<?php wp_print_styles() ?>
	</head>

	<body <?php echo ( $pdf ) ? 'class="pdf"' : '' ?>>
		<div class="page-wrap">

			<?php
				foreach ( $tickets as $ticket ):
					$venues[ $ticket->venue->ID ] = $ticket->venue;
					$args['ticket'] = $ticket;
					QSOT_Templates::include_template( 'tickets/ticket/ticket.php', $args );
				endforeach;
			?>

			<?php
				foreach ( $venues as $venue ):
					$args['venue'] = $venue;
					QSOT_Templates::include_template( 'tickets/ticket/venue-info.php', $args );
				endforeach;
			?>

		</div>
	</body>
</html>

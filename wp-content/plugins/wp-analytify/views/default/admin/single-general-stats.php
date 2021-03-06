<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

/*
 * View of General Statistics for Single Page
 */

function wpa_include_single_general( $current, $stats ) {

	$results = $stats->totalsForAllResults;
	$is_amp_installed = defined( 'ANALYTIFY_AMP_VERSION' );
	?>
	<div class="analytify_general_status analytify_status_box_wraper">
			<div class="analytify_status_header">
					<h3><?php esc_html_e( 'General Statistics', 'wp-analytify' ); ?></h3>
			</div>
			<div class="analytify_status_body">
				<div class="analytify_general_status_boxes_wraper">
					<div class="analytify_general_status_boxes">
							<h4><?php esc_html_e( 'Sessions', 'wp-analytify' ); ?></h4>
							<div class="analytify_general_stats_value"><?php echo WPANALYTIFY_Utils::pretty_numbers( $results['ga:sessions'] ); ?> <?php echo $is_amp_installed ? '(' . $stats->rows['1']['1'] . ')'  : '' ?> </div>
							<p><?php esc_html_e( 'Total number of Sessions within the date range. A session is the period time a user is actively engaged with your website. app. etc.', 'wp-analytify' ); ?></p>
					</div>

					<div class="analytify_general_status_boxes">
							<h4><?php esc_html_e( 'Visitors', 'wp-analytify' ); ?></h4>
							<div class="analytify_general_stats_value"><?php echo WPANALYTIFY_Utils::pretty_numbers( $results['ga:users'] ); ?> <?php echo $is_amp_installed ? '(' . $stats->rows['1']['2'] . ')'  : '' ?></div>
							<p><?php esc_html_e( 'Users that have had at least one session within the selected date range. Includes both new and returning users.', 'wp-analytify' ); ?></p>
					</div>

					<div class="analytify_general_status_boxes">
							<h4><?php esc_html_e( 'Page views', 'wp-analytify' ); ?></h4>
							<div class="analytify_general_stats_value"><?php echo WPANALYTIFY_Utils::pretty_numbers( $results['ga:pageviews'] ); ?> <?php echo $is_amp_installed ? '(' . $stats->rows['1']['3'] . ')'  : '' ?></div>
							<p><?php esc_html_e( 'Pageviews is the total number of pages viewed. Repeated views of a single page are counted.', 'wp-analytify' ); ?></p>
					</div>

					<div class="analytify_general_status_boxes">
							<h4><?php esc_html_e( 'Avg. time on Page', 'wp-analytify' ); ?></h4>
							<div class="analytify_general_stats_value"><?php echo WPANALYTIFY_Utils::pretty_time( $results['ga:avgTimeOnPage'] ); ?> <?php echo $is_amp_installed ? '(' . WPANALYTIFY_Utils::pretty_time( $stats->rows['1']['8'] ) . ')' : '' ?></div>
							<p><?php esc_html_e( 'The amount of time (session) a user spends on this page.', 'wp-analytify' ); ?></p>
					</div>

					<div class="analytify_general_status_boxes">
							<h4><?php esc_html_e( 'Bounce Rate', 'wp-analytify' ); ?></h4>
							<div class="analytify_general_stats_value"><?php echo WPANALYTIFY_Utils::pretty_numbers( $results['ga:bounceRate'] ); ?> <span class="analytify_xl_f">%</span> <?php echo $is_amp_installed ?  '(' . WPANALYTIFY_Utils::pretty_numbers( $stats->rows['1']['6'] ) . ' <span class="analytify_xl_f">%</span>)'  : '' ?></div>
							<p><?php esc_html_e( "Bounce Rate is the percentage of single-page visits (i.e. visits in which the person left your site from the entrance page without interacting with the page ).", 'wp-analytify' ); ?></p>
					</div>

					<div class="analytify_general_status_boxes">
							<h4><?php esc_html_e( '% New sessions', 'wp-analytify' ); ?></h4>
							<div class="analytify_general_stats_value"><?php echo WPANALYTIFY_Utils::pretty_numbers( $results['ga:percentNewSessions'] ); ?>% <?php echo $is_amp_installed ?  '(' . $stats->rows['1']['7'] . '%)' : '' ?></div>
							<p><?php esc_html_e( 'Percentage of New Sessions within the date range. A new session is the period time when a new user is actively engaged with your website.', 'wp-analytify' ); ?></p>
					</div>
				</div>
			</div>
			<div class="analytify_status_footer">
				<span class="analytify_info_stats"><?php _e( 'Did you know that Average Session Duration of this page is', 'wp-analytify' )?> <?php echo WPANALYTIFY_Utils::pretty_time( $results['ga:avgSessionDuration'] ); ?><span class="analytify_red  general_stats_message"></span>.</span>
			</div>
		</div>
	<?php
} ?>

<?php
/**
 * Plugin Name: GitHub Actions
 * Plugin URI:
 * Description: GitHub Actions Test Plugin
 * Version: 1.0.0
 * Author: GitHub
 * Author URI:
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: github-actions
 * Domain Path: /languages
 *
 * @package GitHubActions
 */

add_action(
	'admin_notices',
	function () {
		?>
		<div class="notice notice-error">
			<p><?php esc_html_e( 'GITHUB ACTIONS PLUGIN IS WORKIgn!!', 'github-actions' ); ?></p>
		</div>
		<?php
	}
);

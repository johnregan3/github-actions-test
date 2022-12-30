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
			<?php if ( $_GET['TESTING'] && in_array( 'this', array( 'something', 'something_else' ) ) ) : ?>
				<p><?php esc_html_e(  'this is the plugin', 'github-actions' ); ?></p>
			<?php endif; ?>
		</div>
		<?php
	}
);

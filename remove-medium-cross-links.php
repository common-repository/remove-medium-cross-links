<?php
/**
 * Remove Medium cross links
 *
 * Remove Medium cross links footer from WordPress posts.
 *
 * @package   RMCL
 *
 * @author    Typist Tech <remove-medium-cross-links@typist.tech>
 * @copyright 2017-2018 Typist Tech
 * @license   GPL-2.0-or-later
 *
 * @see       https://typist.tech/projects/remove-medium-cross-links
 * @see       https://wordpress.org/plugins/remove-medium-cross-links/
 */

/**
 * Plugin Name:     Remove Medium Cross Links
 * Plugin URI:      https://typist.tech/projects/remove-medium-cross-links
 * Description:     Remove Medium cross links footer from WordPress posts.
 * Author:          Typist Tech
 * Author URI:      https://typist.tech/
 * Text Domain:     remove-medium-cross-links
 * Domain Path:     /languages
 * Version:         1.1.1
 */

declare(strict_types=1);

namespace RMCL;

/**
 * Remove Medium_Site init action.
 */
function remove_medium_cross_links()
{
    remove_action('init', [ 'Medium_Site', 'init' ]);
}

add_action('init', '\RMCL\remove_medium_cross_links', 5);

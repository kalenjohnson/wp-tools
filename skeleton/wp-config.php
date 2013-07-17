<?php
# The base configurations of the WordPress.
#
# This file has the following configurations: MySQL settings, Table Prefix,
# Secret Keys, WordPress Language, and ABSPATH. You can find more information by
# visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
# wp-config.php} Codex page. You can get the MySQL settings from your web host.
#
# This file is used by the wp-config.php creation script during the
# installation. You don't have to use the web site, you can just copy this file
# to "wp-config.php" and fill in the values.
#
# @package WordPress
#

# MySQL settings - You can get this info from your web host
# The name of the database for WordPress#
if ( file_exists( dirname( __FILE__ ) . '/wp-config.local.php' ) ) {
	include( dirname( __FILE__ ) . '/wp-config.local.php' );
} else {
define('DB_NAME', 'putyourdbnamehere');

# MySQL database username#
define('DB_USER', 'usernamehere');

# MySQL database password#
define('DB_PASSWORD', 'yourpasswordhere');

# MySQL hostname#
define('DB_HOST', 'localhost');
}
# Database Charset to use in creating database tables.
define('DB_CHARSET', 'utf8');

# The Database Collate type. Don't change this if in doubt.
define('DB_COLLATE', '');

#
# Enable Multisite Network
#
# Enable this constant to convert your single site WordPress instance in to a Multisite Network.
# If you are upgrading from WordPress MU you can skip this step as your network is already enabled.
#
# define('WP_ALLOW_MULTISITE', true);

#
# Authentication Unique Keys.
#
# Change these to different unique phrases!
# You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
# You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
#
# @since 2.6.0
#
define('AUTH_KEY', 'put your unique phrase here');
define('SECURE_AUTH_KEY', 'put your unique phrase here');
define('LOGGED_IN_KEY', 'put your unique phrase here');
define('NONCE_KEY', 'put your unique phrase here');
#

#
# WordPress Database Table prefix.
#
# You can have multiple installations in one database if you give each a unique
# prefix. Only numbers, letters, and underscores please!
#
$table_prefix = 'wp_';

#
# WordPress Localized Language, defaults to English.
#
# Change this to localize WordPress. A corresponding MO file for the chosen
# language must be installed to wp-content/languages. For example, install
# de.mo to wp-content/languages and set WPLANG to 'de' to enable German
# language support.
#
define('WPLANG', '');

#
# WordPress Site URL
#
# WP_SITEURL, defined since WordPress Version 2.2, allows the WordPress address (URL)
# to be defined. The valued defined is the address where your WordPress core files reside.
# It should include the http:// part too. Do not put a slash "/" at the end. Setting this
# value in wp-config.php overrides the wp_options table value for siteurl and disables the
# WordPress address (URL) field in the Administration > Settings > General panel.
#
# define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/path/to/wordpressp');

#
# WordPress HOME
#
# WP_HOME is another wp-config.php option added in WordPress Version 2.2. Similar to WP_SITEURL,
# WP_HOME overrides the wp_options table value for home but does not change it permanently. home
# is the address you want people to type in their browser to reach your WordPress blog. It should
# include the http:// part. Also, do not put a slash "/" at the end.
#
# define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress');

#
# WordPress Content Dir
# Since Version 2.6, you can move the wp-content directory, which holds your themes, plugins, and
# uploads, outside of the WordPress application directory.
#
# Set WP_CONTENT_DIR to the full local path of this directory (no trailing slash), e.g.
# Set WP_CONTENT_URL to the full URI of this directory (no trailing slash), e.g.
#
# define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/blog/wp-content' );
# define('WP_CONTENT_URL', 'http://'.$_SERVER['SERVER_NAME'].'/blog/wp-content');

#
# WordPress Plugin Dir
#
# Set WP_PLUGIN_DIR to the full local path of this directory (no trailing slash), e.g.
# Set WP_PLUGIN_URL to the full URI of this directory (no trailing slash), e.g.
#
# define('WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/blog/wp-content/plugins' );
# define('WP_PLUGIN_URL', 'http://example/blog/wp-content/plugins');

# If you have compability issues with plugins Set PLUGINDIR to the full local path of this directory (no trailing slash), e.g.
# define('PLUGINDIR', $_SERVER['DOCUMENT_ROOT'] . '/blog/wp-content/plugins' );

#
# AutoSave Interval
#
# When editing a post, WordPress uses Ajax to auto-save revisions to the post as you edit.
# You may want to increase this setting for longer delays in between auto-saves, or decrease
# the setting to make sure you never lose changes. The default is 60 seconds.
#
# define('AUTOSAVE_INTERVAL', 160 ); # seconds

#
# Post Revisions
#
# WordPress, by default, will save copies of each edit made to a post or page, allowing the
# possibility of reverting to a previous version of that post or page. The saving of revisions
# can be disabled, or a maximum number of revisions per post or page can be specified.
#
if ( !defined( 'WP_POST_REVISIONS' ) )
	define('WP_POST_REVISIONS', 3); # Set to false to disable

#
# Cookie Domain
#
# The domain set in the cookies for WordPress can be specified for those with unusual domain setups.
# One reason is if subdomains are used to serve static content. To prevent WordPress cookies from
# being sent with each request to static content on your subdomain you can set the cookie domain to
# your non-static domain only.
#
# define('COOKIE_DOMAIN', 'www.askapache.com');

#
# Debug
#
# The WP_DEBUG option, added in WordPress Version 2.3.1, controls the display of some errors and warnings.
# If this setting is absent from wp-config.php, then the value is assumed to be false.
#
# Additionally, if you are planning on modifying some of WordPress' built-in JavaScript, you should enable SCRIPT_DEBUG
#
if ( !defined( 'WP_DEBUG' ) )
	define('WP_DEBUG', false);
# define('SCRIPT_DEBUG', true);

#
# Admin Script Concatenation
#
# To result in a faster administration area, all Javascript files are concatenated into one URL. If
# Javascript is failing to work in your administration area, you can try disabling this feature.
#
# define('CONCATENATE_SCRIPTS', false);

#
# Error Logging
#
# Because wp-config.php is loaded for every page view not loaded from a cache file, it is an excellent
# location to set php ini settings that control your php installation. This is useful if you don't
# have access to a php.ini file, or if you just want to change some settings on the fly.
#
# @ini_set('log_errors','On');
# @ini_set('display_errors','Off');
# @ini_set('error_log','/home/example.com/logs/php_error.log');

#
# Memory Allocation
#
# Also released with Version 2.5, the WP_MEMORY_LIMIT option allows you to specify the maximum amount
# of memory that can be consumed by PHP. This setting may be necessary in the event you receive a message
# such as "Allowed memory size of xxxxxx bytes exhausted".
#
# This setting increases PHP Memory only for WordPress, not other applications. By default, WordPress
# will attempt to increase memory allocated to PHP to 32MB (code is at beginning of wp-settings.php), so
# the setting in wp-config.php should reflect something higher than 32MB.
#

# define('WP_MEMORY_LIMIT', '64M')

#
# Cache
#
# The WP_CACHE setting, if true, includes the wp-content/advanced-cache.php script, when executing wp-settings.php.
#
#	define('WP_CACHE', true);

#
# Custom User and Usermeta Tables
#
# CUSTOM_USER_TABLE and CUSTOM_USER_META_TABLE are used to designated that the user and usermeta tables
# normally utilized by WordPress are not used, instead these values/tables are used to store your user information.
#
# define('CUSTOM_USER_TABLE', $table_prefix.'my_users');
# define('CUSTOM_USER_META_TABLE', $table_prefix.'my_usermeta');

#
# Language Directory
#
# LANGDIR defines what directory the WPLANG .mo file resides. If LANGDIR is not defined WordPress looks first
# to wp-content/languages and then wp-includes/languages for the .mo defined by WPLANG file.
#
# define('LANGDIR', 'mylanguagedirectory');

#
# Save queries for analysis
#
# The SAVEQUERIES definition saves the database queries to a array and that array can be displayed to help
# analyze those queries. The information saves each query, what function called it, and how long that query took to execute.
#
# @see http://codex.wordpress.org/Editing_wp-config.php#Save_queries_for_analysis
#
# define('SAVEQUERIES', true);

#
# Override of default file permissions
#
# The FS_CHMOD_DIR and FS_CHMOD_FILE define statements allow override of default file permissions. These two variables
# were developed in response to the problem of the core update function failing with hosts (e.g. some Italian hosts)
# running under suexec. If a host uses restrictive file permissions (e.g. 400) for all user files, and refuses to access
# files which have group or world permissions set, these definitions could solve the problem. Note that the '0755' is an
# octal value and is not delineated with single quotes ('). See Also: Changing File Permissions
#
# define('FS_CHMOD_DIR', (0755 &amp; ~ umask()));
# define('FS_CHMOD_FILE', (0644 &amp; ~ umask()));

#
# FTP/SSH Constants
#
# To enable SSH2 as an upgrade option you will need to install the pecl SSH2 extension.
# These methods for the WordPress core, plugin, and theme upgrades try to determine the WordPress path, as reported
# by PHP, but symlink trickery can sometimes 'muck this up' so if you know the paths to the various folders on the
# server, as seen via your FTP user, you can manually define them in the wp-config.php file
#
# @see http://codex.wordpress.org/Editing_wp-config.php#FTP.2FSSH_Constants
#
# define('FS_METHOD', 'ftpext');
# define('FTP_BASE', '/path/to/wordpress/');
# define('FTP_CONTENT_DIR', '/path/to/wordpress/wp-content/');
# define('FTP_PLUGIN_DIR ', '/path/to/wordpress/wp-content/plugins/');
# define('FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub');
# define('FTP_PRIKEY', '/home/username/.ssh/id_rsa');
# define('FTP_USER', 'username');
# define('FTP_PASS', 'password');
# define('FTP_HOST', 'ftp.example.org:21');

#
# Alternative Cron
# Use this, for example, if scheduled posts are not getting published. According to Otto's forum explanation,
# "this alternate method uses a redirection approach, which makes the users browser get a redirect when the cron
# needs to run, so that they come back to the site immediately while cron continues to run in the connection
# they just dropped. This method is a bit iffy sometimes, which is why it's not the default."
#
# define('ALTERNATE_WP_CRON', true);

#
# Additional Defined Constants
# Here are additional constants that can be defined, but probably shouldn't be. The Cookie definitions are
# particularly useful if you have an unusual domain setup.
#
# define('COOKIEPATH', preg_replace('|https?://[^/]+|i', '', get_option('home') . '/' ) );
# define('SITECOOKIEPATH', preg_replace('|https?://[^/]+|i', '', get_option('siteurl') . '/' ) );
# define('ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' );
# define('PLUGINS_COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', WP_PLUGIN_URL) );
# define('TEMPLATEPATH', get_template_directory());
# define('STYLESHEETPATH', get_stylesheet_directory());
# define('DISABLE_WP_CRON', true);

#
# Empty Trash
#
# Added with Version 2.9, this constant controls the number of days before WordPress permanently deletes
# posts, pages, attachments, and comments, from the trash bin. The default is 30 days.
#
if ( !defined( 'EMPTY_TRASH_DAYS' ) )
	define('EMPTY_TRASH_DAYS', 30 ); # 30 days, set to 0 to disable

# That's all, stop editing! Happy blogging.

# Absolute path to the WordPress directory.
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

# Sets up WordPress vars and included files.
require_once(ABSPATH . 'wp-settings.php');
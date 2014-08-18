<?php

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Bituitus Theme' );
define( 'CHILD_THEME_URL', 'https://github.com/thremes/bituitus' );

//* Load main functionality
add_action( 'genesis_setup', array( 'Bituitus_Main', 'get_instance' ) );

//* Load cleanup functionality
require_once( 'bituitus.cleanup.php' );
add_action( 'genesis_setup', array( 'Bituitus_Cleanup', 'get_instance' ), 15 );

//* Load later functionality
require_once( 'bituitus.later.php' );
add_action( 'genesis_setup', array( 'Bituitus_Later', 'get_instance' ), 15 );

//* Load assets functionality
require_once( 'assets/assets.php' );
add_action( 'genesis_setup', array( 'Bituitus_Assets', 'get_instance' ) );

/**
 * Class Bituitus_Main
 */
final class Bituitus_Main
{
    /**
     * The Constructor
     */
    private function __construct()
    {
        //* Add HTML5 markup structure
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );

        //* Add viewport meta tag for mobile browsers
        add_theme_support( 'genesis-responsive-viewport' );

        //* Add support for 3-column footer widgets
        add_theme_support( 'genesis-footer-widgets', 3 );
    }

    /**
     * Get the Singleton instance
     */
    function get_instance()
    {
        static $instance;
        if ( !isset( $instance ) ) {
            $instance = new Bituitus_Main();
        }

        return $instance;
    }

}

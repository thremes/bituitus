<?php

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Dalen21 Theme' );
define( 'CHILD_THEME_URL', 'https://github.com/trsenna/dalen21' );

//* Load main functionality
add_action( 'genesis_setup', array( 'Dalen21_Main', 'get_instance' ) );

//* Load cleanup functionality
require_once( 'dalen21.cleanup.php' );
add_action( 'genesis_setup', array( 'Dalen21_Cleanup', 'get_instance' ), 15 );

//* Load later functionality
require_once( 'dalen21.later.php' );
add_action( 'genesis_setup', array( 'Dalen21_Later', 'get_instance' ), 15 );

//* Load assets functionality
require_once( 'assets/assets.php' );
add_action( 'genesis_setup', array( 'Dalen21_Assets', 'get_instance' ) );

//* Load shortcode/clip infrastructure
//require_once( 'classes/clip.php' );
//require_once( 'shortcodes/shortcodes.php' );
//new Dalen21_Shortcodes( new Dalen21_Clip_Shortcodes() );

/**
 * Class Dalen21_Main
 */
final class Dalen21_Main
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
            $instance = new Dalen21_Main();
        }

        return $instance;
    }

}

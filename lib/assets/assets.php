<?php

/**
 * Class Bituitus_Assets
 */
final class Bituitus_Assets
{
    /**
     * The Constructor
     */
    private function __construct()
    {
        $this->style_trump();

        add_action( 'wp_enqueue_scripts', array( $this, 'fonts' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );
    }

    /**
     * Get the Singleton instance
     */
    function get_instance()
    {
        static $instance;
        if ( !isset( $instance ) ) {
            $instance = new Bituitus_Assets();
        }

        return $instance;
    }

    /**
     * Style Trump
     */
    function style_trump()
    {
        remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
        add_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet', 99 );
    }

    /**
     * Enqueue fonts
     */
    function fonts()
    {
        $playfair = 'Playfair+Display:400,700,900,400italic,700italic,900italic';
        wp_enqueue_style( 'bituitus-fonts', "//fonts.googleapis.com/css?family={$playfair}" );
    }

    /**
     * Enqueue Styles
     */
    function styles()
    {
        $this->enqueue_style( 'bituitus-normalize', 'normalize.css' );
        $this->enqueue_style( 'bituitus-base', 'base.css', array( 'bituitus-normalize' ) );
    }

    /**
     * Enqueue Style
     *
     * @param        $handle
     * @param        $src
     * @param array  $deps
     * @param string $media
     */
    private function enqueue_style( $handle, $src, $deps = array(), $media = 'all' )
    {
        if ( file_exists( trailingslashit( get_stylesheet_directory() ) . "lib/assets/css/{$src}" ) ) {
            $src = trailingslashit( get_stylesheet_directory_uri() ) . "lib/assets/css/{$src}";
            wp_enqueue_style( $handle, $src, $deps, FALSE, $media );
        }
    }
}

<?php

/**
 * Class Dalen21_Cleanup
 */
final class Dalen21_Cleanup
{
    /**
     * The Constructor
     */
    private function __construct()
    {
        //* Unregister secondary sidebar
        unregister_sidebar( 'sidebar-alt' );

        //* Unregister not needed layouts
        genesis_unregister_layout( 'content-sidebar-sidebar' );
        genesis_unregister_layout( 'sidebar-sidebar-content' );
        genesis_unregister_layout( 'sidebar-content-sidebar' );
    }

    /**
     * Get the Singleton instance
     */
    function get_instance()
    {
        static $instance;
        if ( !isset( $instance ) ) {
            $instance = new Dalen21_Cleanup();
        }

        return $instance;
    }

}
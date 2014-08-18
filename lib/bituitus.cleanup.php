<?php

/**
 * Class Bituitus_Cleanup
 */
final class Bituitus_Cleanup
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
            $instance = new Bituitus_Cleanup();
        }

        return $instance;
    }

}

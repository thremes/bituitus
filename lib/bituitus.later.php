<?php

/**
 * Class Bituitus_Later
 */
final class Bituitus_Later
{
    /**
     * The Constructor
     */
    function __construct()
    {
        // TODO - Here goes any later functionality of yours...
    }

    /**
     * Get the Singleton instance
     */
    function get_instance()
    {
        static $instance;
        if ( !isset( $instance ) ) {
            $instance = new Bituitus_Later();
        }

        return $instance;
    }
}

<?php

/**
 * Class Dalen21_Later
 */
final class Dalen21_Later
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
            $instance = new Dalen21_Later();
        }

        return $instance;
    }
}

<?php
if ( ! function_exists( 'block_theme' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook.
     */
    function block_theme() {

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_editor_style( 'editor-style.css' );

        //
        add_theme_support( 'editor-font-sizes', array() );

    }

endif; // block_theme
add_action( 'after_setup_theme', 'block_theme' );

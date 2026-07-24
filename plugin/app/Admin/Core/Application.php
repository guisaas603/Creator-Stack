<?php

namespace CreatorStack\Core;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Application {

    /**
     * Boot the plugin.
     */
    public static function boot() {

        add_action( 'admin_menu', [ self::class, 'register_admin_menu' ] );

    }

    /**
     * Register admin menu.
     */
    public static function register_admin_menu() {

        add_menu_page(
            'Creator-Stack',
            'Creator-Stack',
            'manage_options',
            'creator-stack',
            [ self::class, 'dashboard' ],
            'dashicons-store',
            25
        );

    }

    /**
     * Dashboard page.
     */
    public static function dashboard() {
        ?>
        <div class="wrap">
            <h1>🚀 Creator-Stack</h1>

            <h2>Welcome!</h2>

            <p>The Ultimate Creator Commerce Platform for WordPress.</p>

            <hr>

            <h3>Version 1.0.0</h3>

            <p>Plugin initialized successfully.</p>

        </div>
        <?php
    }
}
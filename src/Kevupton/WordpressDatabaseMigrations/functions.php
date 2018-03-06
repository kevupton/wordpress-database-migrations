<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 6/03/2018
 * Time: 9:08 PM
 */

namespace Kevupton\WordpressDatabaseMigrations\functions;

use Kevupton\WordpressDatabaseMigrations\NewWpdb;

function override_wp_db () {
    global $wpdb;

    $wpdb = new NewWpdb(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
}
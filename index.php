<?php
/**
 * @package Sebcodes
 * @category Sebcodes Project
 * @author Sebastian Kiefer (sebcodes)
 * @version 1.0
 * @copyright 2020 Sebastian Kiefer
 * @since 2020
 * @link https://sebcodes.de
 * @see Default
 **/

include __DIR__.'/vendor/autoload.php';

use RestCord\DiscordClient;

$discord = new DiscordClient([
    'token' => include_once 'secrets/key.php'
    ]); // Token is required



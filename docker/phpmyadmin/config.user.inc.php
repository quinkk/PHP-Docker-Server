<?php
ini_set('session.gc_maxlifetime', '31536000');

/**
 * phpMyAdmin custom configuration for proxy setup
 */

// Set the absolute URI when accessed through proxy (controls cookie path/domain)
$cfg['PmaAbsoluteUri'] = 'https://localhost:9999/';


// Allow configuration from environment
if (getenv('PMA_ABSOLUTE_URI')) {
    $cfg['PmaAbsoluteUri'] = getenv('PMA_ABSOLUTE_URI');
}
$cfg['LoginCookieValidity'] = 3600 * 24 * 365; // 1 year
$cfg['ExecTimeLimit'] = 0;

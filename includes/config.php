<?php


/**
 * Application debug mode
 * default : false
 * val : true/false
 */
define('DEBUG', false);

/**
 * If you install script on sub folder, insert that folder name here
 * default : ''
 * example : mydomain.com/gdplyr
 * define('PROOT', '/gdplyr');
 */
define('PROOT', '');

define('HLS_API_SECRET_KEY', 'ddWA2322!35e7');

$allowed_domains = ['localhost','freakplayer.tk'];

define('ALLOWED_DOMAINS', $allowed_domains);

define('FIREWALL', false);

define('HLS_SEGMENT_DURATION', 2);

/**
 * Application root directory
 */
define('ROOT', dirname(__FILE__, 2));

define('MEDIA_DIR', 'media');
define('TMP_DIR', ROOT. '/temp');

define('DOWNLOAD_CHUNK_SIZE', 25 * 1024 * 1024);
include (ROOT . '/includes/core.php');
define('_SEC_LOCK', '#$wel');



function dnd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}


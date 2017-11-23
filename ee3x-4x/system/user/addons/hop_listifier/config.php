<?php 

$config['name']='Hop Listifier';
$config['version']='1.0';
$config['nsm_addon_updater']['versions_xml']='http://www.hopstudios.com/software/versions/listifier';

// Version constant
if (!defined("HOP_LISTIFIER_VERSION")) {
define('HOP_LISTIFIER_VERSION', $config['version']);
}
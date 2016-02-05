<?php 

$config['name']='Listifier';
$config['version']='1.0';
$config['nsm_addon_updater']['versions_xml']='http://www.hopstudios.com/software/versions/listifier';

// Version constant
if (!defined("LISTIFIER_VERSION")) {
define('LISTIFIER_VERSION', $config['version']);
}
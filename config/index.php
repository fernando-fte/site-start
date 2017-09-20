<?php 
// REQUIRE BASIC SETTINGS FOR APP
require_once 'Settings.php';
	// DEFINE BASIC CONFIGURATIONS
	$settings->setDevMode(true); // Define mode on developer
	$settings->set('updateCache', date('y-m-d-').str_replace(' ', '_', microtime())); // Define preset for update cache

// REQUIRE ROUTES FUNCTION FOR NAVIGATION
require_once 'routes/index.php';

// REQUIRE FUNCTIONS FOR DEVELOPER MODE
require_once 'devmode/index.php';

// INCLUDES FOR TESTS
require_once 'tests/index.php';
?>

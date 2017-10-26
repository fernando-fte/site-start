<?php 
// TODO: Importar de banco de dados

// CONFIGURE PREDEFINITIONS
// Define basic solicitations
$settings->set('page-list', json_decode(file_get_contents('navigate.json'), true));
$settings->set('page-private', false);
// Define pagina global caso nao seja setato
$settings->set('page-name', 'home');
$settings->set('page', $settings->get('page-list')[$settings->get('page-name')]);
$settings->set('page-model', 'default');

// REQUIRE CURRENT PAGE
if (array_key_exists('page', $_GET)) {

	if (array_key_exists($_GET['page'], $settings->get('page-list'))) {
		$settings->set('page-name', $_GET['page']);
	} else {
		$settings->set('page-name', '404');
	}

	if (isset($_GET['page-private']) && $_GET['page-private'] === true || isset($_POST['page-private']) && $_POST['page-private'] === true) {
		$settings->set('page-private', true);
	}

	$settings->set('page', $settings->get('page-list')[$settings->get('page-name')]);
}

// Preset for navbar
require 'config/navbar/index.php';

// Functions specific for page
switch ($settings->get('page-name')) {
	// case 'page-name':
	// 	require 'config/configuration-this-page';
	// 	break;
}

// Type render page
$settings->set('page-model', isset($settings->get('page')['route']['model'])?$settings->get('page')['route']['model']:$settings->get('page-model'));
switch ($settings->get('page-model')) {
	case 'default':
		require_once 'models/page-index.php';
		break;
	case 'default-no-script':
		require_once 'models/page-index-no-script.php';
		break;
}
?>

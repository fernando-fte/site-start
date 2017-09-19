<?php 
$page_navbar = array();
$page_navbar_repeated = array();

foreach ($settings->get('page-list') as $page_item_name => $page_item_value) {
	
	if (isset($page_item_value['navbar']) && is_array($page_item_value['navbar'])) {

		foreach ($page_item_value['navbar'] as $navbar_name => $navbar_value) {

			if (!isset($page_navbar[$navbar_name])) {
				$page_navbar[$navbar_name] = array();
			}

			if (isset($page_navbar[$navbar_name][$navbar_value['order']])) {
				$page_navbar_repeated[$navbar_name][$navbar_value['order']][] = $navbar_value;
			}
			else {
				$page_navbar[$navbar_name][$navbar_value['order']] = $navbar_value;
			}
		}
	}
}

foreach ($page_navbar_repeated as $page_item_name => $page_item_value) {

	$reorder = array();
	foreach ($page_item_value as $position => $new_instances) {

		for ($i=0; $i < count($page_navbar[$page_item_name]); $i++) { 

			$reorder[$page_item_name][] = $page_navbar[$page_item_name][($i+1)];

			if (($i+1) === $position) {
				
				foreach ($new_instances as $value) {
					$reorder[$page_item_name][] = $value;
				}
			}
		}

	}

	$page_navbar[$page_item_name] = $reorder[$page_item_name];
}

$settings->set('navbar', $page_navbar);
?>
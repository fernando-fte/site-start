<?php 
/*********************************
// SETTINGS GLOBAL ITENS FUNCTION
*** define new instance:
	 set ->
	 	$1: INSTANCE-NAME = string,
	 	$2: VALUES-INSTANCE = all-types
	 	$return: null

*** request new instance:
	 get -> 
	 	$1: INSTANCE-NAME = string
	 	$return: all-types (pre-set)

*** function pre-definition set developer mode
	setDevMode->
		$1: SET INSTANCE VARIABLE BOOLEAN = all-type
	getDevMode ->
		$return: all-type (pre-set)
	devMode ->
		$return: all-type (pre-set)

	*** 
***********************************/
class Settings {
	protected $devMode;

	// new instance
	public function set($instanceName, $instanceValue) {
		$this->{$instanceName} = $instanceValue;
	}

	public function get($instanceName) {
		if(isset($this->{$instanceName})) {
			return $this->{$instanceName};
		}
	}

	// developer mode
	public function devMode() {
		return $this->getDevMode();
	}
	public function getDevMode() {
		return $this->devMode;
	}
	public function setDevMode($mode) {
		$this->devMode = $mode;
	}
}

// Define settings as GLOBAL
global $settings;

// Define settings as CLASS Settings
$settings = new Settings;
?>

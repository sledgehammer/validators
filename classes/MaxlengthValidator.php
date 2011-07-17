<?php
/**
 * Controleert of het aantal karakters niet te groter is dan de opgegeven lengte.
 *
 * @package Validators
 */
namespace SledgeHammer;
class MaxlengthValidator extends Object implements Validator {

	public 
		$maximum_length;

	function __construct($maximum_length) {
		$this->maximum_length = $maximum_length;
	}

	function validate($value, &$error_message) { // [bool]
		if (strlen($value) <= $this->maximum_length) {
			return true;
		} else {
			$error_message = 'Maximum length of '.$this->maximum_length.' exceeded by '.(strlen($value) - $this->maximum_length);
			return false;
		}
	}
}
?>

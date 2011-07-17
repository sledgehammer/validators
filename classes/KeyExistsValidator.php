<?php
/**
 * Controleert of de waarde voorkomt als key in de array.
 *
 * @package Validators
 */
namespace SledgeHammer;
class KeyExistsValidator extends Object implements Validator {

	public 
		$array;

	function __construct($array = array()) {
		$this->array = $array;
	}

	function validate($value, &$error_message) { // [bool]
		if (array_key_exists($value, $this->array)) {
			return true;
		} else {
			$error_message = 'Invalid option';
			return false;
		}
	}
}
?>

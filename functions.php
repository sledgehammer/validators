<?php
/**
 * @package Validators
 */

/**
 * Shortcut to use a Validator object.
 *   $Validator = new ValidatorClass;
 *   $is_valid = $Validator->validate($value, $error_message);
 * Becomes
 *   $is_valid = validate($value, $error_message, new ValidatorClass);
 * 
 * @param mixed $value
 * @param string $error_message
 * @param Validator $Validator
 * @return bool
 */
 function validate($value, &$error_message, SledgeHammer\Validator $Validator) {
 	return $Validator->validate($value, $error_message);
 }
?>

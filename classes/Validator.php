<?php
namespace SledgeHammer;
/**
 * Interface voor de Validatie classes
 *
 * @package Validators
 */
interface Validator {

	/**
	 * Controleert een waarde correct is.
	 * Retourneert true bij een correcte waarde en false als bij een incorrecte waarde.
	 *
	 * @param mixed $value De waarde die gecontroleerd moet worden
	 * @param sting|NULL $error_message Zodra het fout gaat, zal de waarde ingesteld worden met de reden van de fout
	 * @return bool
	 */
	function validate($value, &$error_message);
}

?>

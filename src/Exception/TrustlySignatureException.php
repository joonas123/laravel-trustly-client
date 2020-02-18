<?php

namespace Joonas1234\LaravelTrustlyClient\Exception;

/**
 * Thrown whenever we encounter a response or notifiction request from the API
 * that is signed with an incorrect signature. This is serious and could be an
 * indication that message contents are being tampered with.
 */
class TrustlySignatureException extends \Exception {

	/**
	 * Constructor
	 *
	 * @param string $message Exception message
	 *
	 * @param array $data Data that was signed with an invalid signature
	 */
	public function __construct($message, $data=NULL) {
		parent::__construct($message);
		$this->signature_data = $data;
	}


	/**
	 * Get the data that had an invalid signature. This is the only way to get
	 * data from anything with a bad signature. This should be used for
	 * DEBUGGING ONLY. You should NEVER rely on the contents.
	 */
	public function getBadData() {
		return $this->signature_data;
	}
}

<?php

namespace Joonas1234\LaravelTrustlyClient\Exception;

/**
 * Thrown whenever there is a connectivity problem with the API. Such as a
 * network problem or an overall problem with the service itself.
 */
class TrustlyConnectionException extends \Exception { }
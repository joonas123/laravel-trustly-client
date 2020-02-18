<?php

namespace Joonas1234\LaravelTrustlyClient\Exception;

/**
 * Thrown if we encounter a response or notification request from the API with
 * a JSON RPC version this API has not been built to handle.
 */
class TrustlyJSONRPCVersionException extends \Exception { }
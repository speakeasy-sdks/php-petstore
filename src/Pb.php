<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore;

/**
 * Pb - Petstore: REST API for interfacing with Petstore.
 * 
 * An Example Petstore API
 * 
 * @package php\petstore
 * @access public
 */
class Pb
{
	public const SERVERS = [
        /** Production */
		'https://api.petstore.com',
        /** Sandbox */
		'https://sandbox-api.petstore.com',
	];
  	
    /**
     * Work with Animals.
     * 
     * @var Animals $$animals
     */
	public Animals $animals;
	
    /**
     * Birds information.
     * 
     * @var Birds $$birds
     */
	public Birds $birds;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return PbBuilder
	 */
	public static function builder(): PbBuilder
	{
		return new PbBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->animals = new Animals($this->sdkConfiguration);
		
		$this->birds = new Birds($this->sdkConfiguration);
	}
}
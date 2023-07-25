<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace php\petstore\Models\Operations;

use \php\petstore\Utils\SpeakeasyMetadata;
class CreateAnimalSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public string $key1;
    
	public function __construct()
	{
		$this->key1 = "";
	}
}
